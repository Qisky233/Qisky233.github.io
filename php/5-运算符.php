<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>运算符</title>
</head>
<body>
<?php 
$x=10; 
$y=6;
echo ($x + $y); // 输出16
echo '<br>';  // 换行
 
echo ($x - $y); // 输出4
echo '<br>';  // 换行
 
echo ($x * $y); // 输出60
echo '<br>';  // 换行
 
echo ($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行
 
echo ($x % $y); // 输出4
echo '<br>';  // 换行
 
echo -$x;
?>

<?php
echo('<br>');
echo('返回值为第一个参数除于第二个参数的值并取整（向下取整）');
$x = var_dump(intdiv(10, 3));
?>

<?php 
$x=10; 
echo $x; // 输出10
echo('<br>');
 
$y=20; 
$y += 100;
echo $y; // 输出120
echo('<br>');
 
$z=50;
$z -= 25;
echo $z; // 输出25
echo('<br>');
 
$i=5;
$i *= 6;
echo $i; // 输出30
echo('<br>');
 
$j=10;
$j /= 5;
echo $j; // 输出2
echo('<br>');
 
$k=15;
$k %= 4;
echo $k; // 输出3
echo('<br>');
?>

<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world! 
echo('<br>');
 
$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world! 
echo('<br>');
?>

<?php
$x=10; 
echo ++$x; // 输出11
echo('<br>');
 
$y=10; 
echo $y++; // 输出10
echo('<br>');
 
$z=5;
echo --$z; // 输出4
echo('<br>');
 
$i=5;
echo $i--; // 输出5
echo('<br>');
?>


<?php
$x=100; 
$y="100";
 
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
 
$a=50;
$b=90;
 
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
?>


<?php
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
?>
三元运算符
<?php
// 普通写法
echo "<br>";
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo $username, PHP_EOL;
echo "<br>";
 
// PHP 5.3+ 版本写法
$username = $_GET['user'] ?: 'nobody';
echo $username, PHP_EOL;
echo "<br>";
?>


<?php
// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
echo $username;
echo "<br>";
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo $username;
echo "<br>";



echo "<pre>";        // 开启预格式化
echo "第一行" . PHP_EOL;
echo "第二行" . PHP_EOL;
echo "</pre>";       // 关闭预格式化
?>
比较符(PHP7+)
<?php
echo('<br>');
// 整型
echo 1 <=> 1; // 0
echo('<br>');
echo 1 <=> 2; // -1
echo('<br>');
echo 2 <=> 1; // 1
echo('<br>');
 
// 浮点型
echo 1.5 <=> 1.5; // 0
echo('<br>');
echo 1.5 <=> 2.5; // -1
echo('<br>');
echo 2.5 <=> 1.5; // 1
echo('<br>');
 
// 字符串
echo "a" <=> "a"; // 0
echo('<br>');
echo "a" <=> "b"; // -1
echo('<br>');
echo "b" <=> "a"; // 1
echo('<br>');
?>

优先级
<?php
// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or
 
echo('<br>');
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true 
?>
<?php
// 括号优先运算
 
$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo $d;
echo "\n";
$e = ($a + $b) * $c;  // 使用括号
echo $e;
echo "\n";
?>
</body>
</html>