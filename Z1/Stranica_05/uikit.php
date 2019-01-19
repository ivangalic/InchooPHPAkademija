<!DOCTYPE html>
<html>
<head>
    <title>UIkit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">




            <li><a href="../index.php">Custom</a></li>
            <li><a href="../Stranica_02/bootstrap.php">Bootstrap</a></li>
            <li><a href="../Stranica_03/foundation.php">Foundation</a></li>
            <li><a href="../Stranica_04/skeleton.php">Skeleton</a></li>
            <li><a href="uikit.php">UIkit</a></li>


        </ul>
    </div>
</nav>

<?php

$name= 'Ivan';
echo 'Hello ' . htmlspecialchars($_GET["$name"]) . '!';
?>



</body>
</html>

