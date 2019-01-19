<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

  <h1>Foundation</h1>

  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li><a href="../index.php">Custom</a></li>
        <li><a href="../Stranica_02/bootstrap.php">Bootstrap</a></li>
        <li><a href="foundation.php">Foundation</a></li>
        <li><a href="../Stranica_04/skeleton.php">Skeleton</a></li>
        <li><a href="../Stranica_05/uikit.php">UIkit</a></li>
      </ul>
    </div>

  </div>



  <p>Arithmetic Operators</p>

  <?php

  $x= 5;
  $y= 10;

  $a= $x+$y;

  echo $a, "<hr/>";

  $z= -$x+$y;

  echo $z, '<hr/>';

  $z= --$x+$y;

  echo $z, '<hr/>';

  $e= +$x+$y;

  echo $e, '<hr/>';

  $x+=5;

  echo $x, "<hr/>";

  ?>

  <p>Comparison Operators</p>

  <?php

  $x="15";

  echo $x==15, "<hr/>";
  echo $x==14, "<hr/>";
  echo $x===15, "<hr/>";
  echo $x!=6, "<hr/>";
  echo $x>6, "<hr/>";
  echo $x<>8, "<hr/>";
  echo $x!==8, "<hr/>";
  echo $x<8, "<hr/>";
  echo $x<=20, "<hr/>";
  echo $x>=12, "<hr/>";
  ?>


  <p>Execution Operators</p>

  <?php

  $output = `ls -al`;
  echo "<pre>",$output,"</pre>";

  ?>

  <p>Incrementing/Decrementing Operators</p>

  <?php

  $i=1;
  $j=2;

  $i++;

  echo '$i=',$i, ",", '$j=',$j, "<br />";

  ++$i;

  echo '$i=',$i, ",", '$j=',$j, "<br />";

  $j--;

  echo '$i=',$i, ",", '$j=',$j, "<br />";

  --$j;

  echo '$i=',$i, ",", '$j=',$j, "<br />";


  ?>

  </body>
</html>


