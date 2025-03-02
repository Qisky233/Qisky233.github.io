<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}
?>
<br>
<?php
$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);
?>
<br>
<?php
for ($i=1; $i<=5; $i++)
{
    echo "数字为 " . $i . PHP_EOL . "<br>";
}
?>
<br>
<?php
$x=array("Google","Runoob","Taobao");
foreach ($x as $value)
{
    echo $value . PHP_EOL;
}
?>
<br>
<?php
$x=array(1=>"Google", 2=>"Runoob", 3=>"Taobao");
foreach ($x as $key => $value)
{
    echo "key  为 " . $key . "，对应的 value 为 ". $value . PHP_EOL;
}
?>
<br>
冒泡排序
<br>
<?php
$arr=array(5,3,6,2,8,10,7);
for($i=count($arr)-1;$i>0;$i--) {
    for($j=0;$j<$i;$j++) {
        if($arr[$j+1]<$arr[$j]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}
print_r($arr)
?>
</body>
</html>