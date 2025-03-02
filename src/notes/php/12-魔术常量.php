<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo '这是第 " '  . __LINE__ . ' " 行';
?>
<br>
<?php
echo '该文件位于 " '  . __FILE__ . ' " ';
?>
<br>
<?php
echo '该文件位于 " '  . __DIR__ . ' " ';
?>
<br>
<?php
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
?>
<br>
<?php
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
?>
<br>
<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
 
class MyHelloWorld extends Base {
    use SayWorld;
}
 
$o = new MyHelloWorld();
$o->sayHello();
?>

<br>
<?php
function test2() {
    echo  '函数名为：' . __METHOD__ ;
}
test2();
?>

<br>
</body>
</html>