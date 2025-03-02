<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set('PRC');
$t=date("Y-m-d H:i:s");
echo($t);
echo('<br>');
$t=date("H");
if ($t<"20")
{
    echo($t);
    echo "Have a good day!";
}
?>

<?php
echo('<br>');
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>
</body>
</html>