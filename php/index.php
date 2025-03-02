<?php
// 仅在直接访问时执行动态逻辑
// if (php_sapi_name() !== 'cli-server') {
//     die('This file should not be accessed directly');
// }


define('ROOT_DIR', realpath(__DIR__));

// 允许直接预览的文件扩展名
const PREVIEWABLE_EXT = [
    'php', 'html', 'htm', 'txt', 
    'png', 'jpg', 'jpeg', 'gif', 
    'pdf', 'css', 'js', 'json'
];

// 处理当前目录参数
$current_dir = isset($_GET['dir']) ? trim($_GET['dir']) : '';
$real_path = realpath(ROOT_DIR . DIRECTORY_SEPARATOR . $current_dir);

// 安全校验
if ($real_path === false || strpos($real_path, ROOT_DIR) !== 0) {
    http_response_code(403);
    die('<h1>禁止访问</h1>');
}

// 处理文件预览请求
if (isset($_GET['file'])) {
    $file_path = realpath(ROOT_DIR . DIRECTORY_SEPARATOR . $_GET['file']);
    
    // 验证文件合法性
    if ($file_path && strpos($file_path, ROOT_DIR) === 0 && is_file($file_path)) {
        $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        
        // 设置MIME类型
        $mime_types = [
            'txt' => 'text/plain',
            'php' => 'text/html',
            'html' => 'text/html',
            'htm' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'pdf' => 'application/pdf'
        ];
        
        header('Content-Type: '. ($mime_types[$ext] ?? 'application/octet-stream'));
        
        if ($ext === 'php') {
            // 执行PHP文件
            include $file_path;
        } else {
            // 输出其他文件内容
            readfile($file_path);
        }
        exit;
    }
    
    http_response_code(404);
    die('文件不存在');
}

// 生成父级目录参数
$parent_dir = dirname($current_dir);
if ($parent_dir === '.') $parent_dir = '';

// 获取目录内容
$items = scandir($real_path);
$dirs = [];
$files = [];

foreach ($items as $item) {
    if ($item === '.' || $item === '..' || $item === basename(__FILE__)) continue;
    
    $full_path = $real_path . DIRECTORY_SEPARATOR . $item;
    if (is_dir($full_path)) {
        $dirs[$item] = filemtime($full_path);
    } else {
        $files[$item] = filemtime($full_path);
    }
}

// 排序函数
$sort_by_mtime = function($a, $b) {
    return $b <=> $a; // 按修改时间倒序
};

arsort($dirs, SORT_NUMERIC);
arsort($files, SORT_NUMERIC);

// 构建最终列表（添加返回上级）
$sorted_items = [];
if ($real_path !== ROOT_DIR) { // 非根目录时添加返回上级
    $sorted_items[] = [
        'type' => 'parent',
        'name' => '..',
        'path' => $parent_dir,
        'mtime' => filemtime(dirname($real_path))
    ];
}

// 合并目录和文件
foreach (array_keys($dirs) as $dir) {
    $sorted_items[] = [
        'type' => 'dir',
        'name' => $dir,
        'path' => $current_dir ? "{$current_dir}/{$dir}" : $dir,
        'mtime' => $dirs[$dir]
    ];
}

foreach (array_keys($files) as $file) {
    $sorted_items[] = [
        'type' => 'file',
        'name' => $file,
        'path' => $current_dir ? "{$current_dir}/{$file}" : $file,
        'mtime' => $files[$file]
    ];
}

// 新增文件大小格式化函数
function format_size($bytes) {
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return $bytes . ' byte';
    } else {
        return '0 bytes';
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件导航 - <?= htmlspecialchars($current_dir ?: '根目录') ?></title>
    <style>
        :root { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        body { margin: 2rem; background: #f8f9fa; }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .nav-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .breadcrumb {
            flex-grow: 1;
            color: #666;
        }
        .breadcrumb a { color: #007bff; text-decoration: none; }
        .file-list { list-style: none; padding: 0; }
        .file-item {
            display: flex;
            align-items: center;
            padding: 0.8rem;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }
        .file-item:hover { background: #f8f9fa; }
        .file-icon { width: 24px; margin-right: 1rem; opacity: 0.7; }
        .file-name {
            flex: 1;
            word-break: break-all;
            color: #333;
            text-decoration: none;
        }
        .file-meta {
            min-width: 120px;
            text-align: right;
            color: #666;
            font-size: 0.9em;
        }
        @media (max-width: 768px) {
            .file-meta:last-child { display: none; }
            body { margin: 1rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-header">
            <div class="breadcrumb">
                <?php
                // 生成面包屑导航
                $path_segments = $current_dir ? explode('/', $current_dir) : [];
                $accumulated_path = '';
                echo '<a href="?">根目录</a> / ';
                foreach ($path_segments as $segment) {
                    $accumulated_path .= $segment . '/';
                    echo '<a href="?dir=' . urlencode(rtrim($accumulated_path, '/')) . '">'
                        . htmlspecialchars($segment) 
                        . '</a> / ';
                }
                ?>
            </div>
        </div>
        
        <ul class="file-list">
            <?php 
                foreach ($sorted_items as $item): 
                    if ($item['type'] === 'parent') continue; // 跳过返回上级项
                    $is_dir = $item['type'] === 'dir';
                    $ext = $is_dir ? '' : strtolower(pathinfo($item['name'], PATHINFO_EXTENSION));
                    $is_previewable = in_array($ext, PREVIEWABLE_EXT);
                ?>
                <li class="file-item">
                    <span class="file-icon"><?= $is_dir ? '📁' : '📄' ?></span>
                    <a href="<?= $is_dir ? '?dir=' . urlencode($item['path']) : (
                        $is_previewable ? "?file=" . urlencode($item['path']) : $item['path']
                    ) ?>" 
                    class="file-name"
                    <?= !$is_dir && !$is_previewable ? 'download' : '' ?>>
                        <?= htmlspecialchars($item['name']) ?>
                    </a>
                    <span class="file-meta"><?= $is_dir ? '文件夹' : format_size(filesize($real_path . DIRECTORY_SEPARATOR . $item['name'])) ?></span>
                    <span class="file-meta"><?= date('Y-m-d H:i', $item['mtime']) ?></span>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>