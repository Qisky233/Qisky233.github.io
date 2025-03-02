<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字符串</title>
</head>
<body>
<?php
$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;
?>

<?php
echo('<br>');
echo('<span>返回字符串的长度</span> ');
echo strlen("Hello world!");
?>

<?php
echo('<br>');
echo('<span>返回第一个匹配的字符位置</span> ');
echo strpos("Hello world!","world");
?>
</body>
</html>