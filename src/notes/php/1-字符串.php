<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字符串</title>
</head>
<body>
<h2>##字符串</h2>
<?php 
// $x = "Hello world!";
// echo $x;
// echo "<br>"; 
// $x = 'Hello world!';
// echo $x;
$x = "hello world!";
echo $x;
echo "<br>";
var_dump($x);
echo "<br>";
?>
<h2>整型</h2>
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);

$b = 3.1;
$c = true;
var_dump($b, $c);
?>

<h2>浮点型</h2>
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
echo "<br>"; 
$x = 5 ** 200;        // 直接计算 5 的十次方
var_dump($x);        // 输出：int(9765625)（整数类型）
echo "<br>"; 
$y = 9.765625E6;    // 科学记数法输入
var_dump($y);        // 输出：float(9765625)（浮点数类型）
?>

<h2>数组</h2>
<?php 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>

<h2>对象</h2>
<?php
class Car
{
    var $color;
    function __construct($color="green") {
      $this->color = $color;
    }
    function what_color() {
      return $this->color;
    }
}

function print_vars($obj) {
   foreach (get_object_vars($obj) as $prop => $val) {
     echo "\t$prop = $val\n";
   }
}

// 实例一个对象
$herbie = new Car("white");

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($herbie);

?>  


<h2>Null值</h2>
<?php
$x=null;
var_dump($x);
?>
</body>
</html>