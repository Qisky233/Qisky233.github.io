<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>类型比较</title>
</head>
<body>
<h2>类型比较</h2>
<ul>
    <li>松散比较：使用两个等号 == 比较，只比较值，不比较类型。</li>
    <li>严格比较：用三个等号 === 比较，除了比较值，也比较类型。</li>
</ul>
<?php
if(42 == "42") {
    echo '1、值相等';
}
 
echo PHP_EOL; // 换行符
 
if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、类型不相等';
}
?>

<h2>比较 0、false、null</h2>
<?php
echo '0 == false: ';
var_dump(0 == false);
echo "<br>";
echo '0 === false: ';
var_dump(0 === false);
echo "<br>";
echo PHP_EOL;
echo '0 == null: ';
var_dump(0 == null);
echo "<br>";
echo '0 === null: ';
var_dump(0 === null);
echo PHP_EOL;
echo "<br>";
echo 'false == null: ';
var_dump(false == null);
echo "<br>";
echo 'false === null: ';
var_dump(false === null);
echo "<br>";
echo PHP_EOL;
echo '"0" == false: ';
var_dump("0" == false);
echo "<br>";
echo '"0" === false: ';
var_dump("0" === false);
echo PHP_EOL;
echo "<br>";
echo '"0" == null: ';
var_dump("0" == null);
echo "<br>";
echo '"0" === null: ';
var_dump("0" === null);
echo "<br>";
echo PHP_EOL;
echo '"" == false: ';
var_dump("" == false);
echo "<br>";
echo '"" === false: ';
var_dump("" === false);
echo PHP_EOL;
echo "<br>";
echo '"" == null: ';
var_dump("" == null);
echo "<br>";
echo '"" === null: ';
var_dump("" === null);
?>
</body>
</html>