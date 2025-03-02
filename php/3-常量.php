<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>常量</title>
</head>
<body>
    <h2>常量</h2>
    <?php
    // 区分大小写的常量名
    define("GREETING", "欢迎访问 Runoob.com");
    echo GREETING;    // 输出 "欢迎访问 Runoob.com"
    echo '<br>';
    // echo greeting;   // 输出 "greeting"，但是有警告信息，表示该常量未定义

    function myTest() {
        echo GREETING;
    }
    
    myTest();    // 输出 "欢迎访问 Runoob.com"

    echo '<br>';
    const SITE_URL = "https://www.runoob.com";
    echo SITE_URL; // 输出 "https://www.runoob.com"
    echo '<br>';

    echo PHP_VERSION; // 输出 PHP 版本，例如 "7.4.1"
    echo '<br>';
    echo PHP_OS;      // 输出操作系统，例如 "Linux"
    echo '<br>';
    echo PHP_INT_MAX; // 输出最大的整数值，例如 "9223372036854775807"


    echo '<br>';
    define("FRUITS", [
        "Apple",
        "Banana",
        "Orange"
    ]);
    
    echo FRUITS[0]; // 输出 "Apple"

    echo '<br>';
    const COLORS = [
        "Red",
        "Green",
        "Blue"
    ];
    
    echo COLORS[1]; // 输出 "Green"
    ?>
</body>
</html>