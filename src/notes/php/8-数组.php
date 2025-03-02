<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo('<br>');
?>
获取数组的长度 - count() 函数

<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>

<?php
echo('<br>');
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>
PHP 关联数组
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
?>
遍历关联数组
<?php
    echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

sort() - 对数组进行升序排列
<?php
    echo "<br>";
	$cars=array("Volvo","BMW","Toyota");
    sort($cars);
    print_r($cars);
    echo "<br>";
?>
rsort() - 对数组进行降序排列
<?php
    echo "<br>";
	$cars=array("Volvo","BMW","Toyota");rsort($cars);print_r($cars);?>
</body>
<br>
asort() - 根据数组的值，对数组进行升序排列  <br>
ksort() - 根据数组的键，对数组进行升序排列<br>

arsort() - 根据数组的值，对数组进行降序排列<br>
krsort() - 根据数组的键，对数组进行降序排列<br>
</html>