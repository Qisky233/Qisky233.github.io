<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function writeName()
{
    echo "Kai Jim Refsnes";
}
 
echo "My name is ";
writeName();
?>

<?php
function writeName2($fname)
{
    echo $fname . " Refsnes.<br>";
}
 
echo "My name is ";
writeName2("Kai Jim");
echo "My sister's name is ";
writeName2("Hege");
echo "My brother's name is ";
writeName2("Stale");
?>

<?php
function writeName3($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
 
echo "My name is1 ";
writeName3("Kai Jim",".");
echo "My sister's name is ";
writeName3("Hege","!");
echo "My brother's name is ";
writeName3("Ståle","?");
?>

<?php
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
 
echo "1 + 16 = " . add(1,16);
?>


<br>


<?php
function foo() {
    echo "In foo()<br />\n";
}

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

// 使用 echo 的包装函数
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // 调用 foo()

$func = 'bar';
$func('test');  // 调用 bar()

$func = 'echoit';
$func('test');  // 调用 echoit()
?>

<?php
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // 调用 Bar() 方法
    }

    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();  // 调用 $foo->Variable()

?>
</body>
</html>