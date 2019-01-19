<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css"/>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Bootstrap</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Custom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bootstrap.php">Bootstrap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Stranica_03/foundation.php">Foundation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Stranica_04/skeleton.php">Skeleton</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Stranica_05/uikit.php">UIkit</a>
            </li>
        </ul>
    </div>
</nav>



<?php



$a=5;
$b=10;

echo $a and $b, "<hr/>";
echo $a or $b, "<hr/>";
echo $a xor $b, "<hr/>";
echo !$a, "<hr/>";
echo $a &&  $b, "<hr/>";
echo $a || $b, "<hr/>";

?>





</body>
</html>
