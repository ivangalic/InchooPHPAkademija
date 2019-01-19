<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$_GET['value1'];
$_GET['value2'];
$_GET['value3'];

$value1=$_GET['value1'];
$value2=$_GET['value2'];
$value3=$_GET['value3'];
?>

<p>Zbroj 3 vrijednosti</p>


<p><?php echo $value1,'+',$value2,'+',$value3,'=',$value1+$value2+$value3 ?> </p>


</body>
</html>