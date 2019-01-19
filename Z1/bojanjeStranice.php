<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!---->
<?php
//V1
//if (isset($_GET['color']))
//{
//    $color = $_GET['color'];
//}
//else {
//    $color = 'white';
//}

//V1
//$_GET['color'];
//$color = $_GET['color']
//
//

//V2

$_GET['color'];

?>
<!--P for V1-->
<!--<body bgcolor="--><?php //echo $color; ?><!--">-->

<body bgcolor="<?php echo $_GET['color']; ?>">

<p>Enter in url /?color='choose color you like' and hit enter</p>


</body>
</html>



