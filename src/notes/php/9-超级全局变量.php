<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

PHP 超级全局变量列表:









<ul>
    <li>$GLOBALS</li>
    <li>$_SERVER</li>
    <li>$_REQUEST</li>
    <li>$_POST</li>
    <li>$_GET</li>
    <li>$_FILES</li>
    <li>$_ENV</li>
    <li>$_COOKIE</li>
    <li>$_SESSION</li>
</ul>

$GLOBALS
<?php 
echo "<br>";
$x = 75; 
$y = 25;
 
function addition() 
{ 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
echo "<br>";
?>

$_SERVER
<?php 
// echo "<br>";
// print_r($_SERVER);
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
?>

<!-- $_REQUEST
$_POST -->


$_GET
<br>
<a href="test_get.php?subject=PHP&web=runoob.com">测试 $_GET</a>

</body>
</html>