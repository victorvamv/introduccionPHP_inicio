<?php include 'includes/header.php';

$numero1 = 3435;
$numero2 = 23214;
$numero3 = 23214;
$numero4 = "23214";

var_dump($numero1 == $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 != $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

// -1 Si Izquierda es menor, 0 si es igual y 1 si Derecha es menor
var_dump($numero1 <=> $numero2);
echo "<br/>";

var_dump($numero2 <=> $numero3);
echo "<br/>";

var_dump($numero3 <=> $numero1);
echo ($numero3 <=> $numero1);
echo "<br/>";






include 'includes/footer.php';