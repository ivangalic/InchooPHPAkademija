<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method="post" action="05.php" enctype="application/x-www-form-urlencoded">
    Enter string:<br>
    <input type="text" name="id" value=""><br>
    <input type="submit" value="Submit">

    <?php

    echo '<br/>';


//getting string from form

$id = $_POST["id"];

//split the string

    $array = explode(',', $id);



    foreach ($array as &$value) {
        $value = preg_replace('/\D/', '', $value);
    }

//creating array which containts only even numbers

    function evenCmp($array)
    {
        return !($array & 1);
    }
    $even = array_filter($array, "evenCmp");
    $even = array_values(array_filter($even));



    sort($even);
//    print_r($even);


//calculating arithmetic mean

$arithmethicMean = array_sum($array) / count($array);
    echo 'Arithmetic mean of the inserted values is:' . $arithmethicMean;



foreach ($even as $bold){

    if ($bold > $arithmethicMean){

        break;
    }


}


    ?>


</form>

<?php

$squareRootPlusOne = intval(sqrt(max($array))) + 1;

//echo $squareRootPlusOne;

echo "<table border='1'>";

    $p = 1;
    for ($i = 0; $i < $squareRootPlusOne; $i++) {
    echo "<tr>";

        for ($j = 0; $j < $squareRootPlusOne; $j++) {
        if (in_array($p, $even)) {
            if ($p == $bold) {
                $p= '<strong>' . $p . '</strong>';
            }
        echo "<td>", $p, "</td>";

        //cant get the number bold

        } elseif (in_array($p, $even) &&  $p == $bold){
             echo "<td><b>", $p, "</b></td>";
            }else
         {
        echo "<td>", "</td>";
        }
        $p++;

        }
        echo "</tr>";
    }
    echo "</table>";
?>




</body>
</html>


<!--Stranica ispisuje sve primljene parne brojeve-->
<!--odnajmanjeg prema najvećem-->

<!--označi podebljano prvi veći parni broj-->
<!--aritmetičke sredine svih primljenih brojeva.-->
<!--Brojevi se ispisuju u kvadratnoj tablici-->
<!--dimenzija drugog korijena-->
<!--najvećeg primljenog broja +1-->
<!--prikažu samo oni brojevi koji-->
<!--odgovaraju kriterijima ispisa brojeva,-->
<!--ostale ćelije slijedno lijevo prema desno parametra gore prema dolje ostaju prazna.-->