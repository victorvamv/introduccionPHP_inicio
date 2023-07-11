<?php include 'includes/header.php';

$nombrePersona = "Victor Vazquez";

$palabraX = "Good";
$palabraY = "Moorning";
$nombre_persona = "   Elizabeth Mata   ";

//Conocer extension de un string
echo strlen($nombrePersona);
echo "<br/>";
var_dump($nombrePersona);
echo "<br/>";
echo ($nombre_persona);
echo strlen($nombre_persona);
echo "<br/>";
echo $palabraX;
echo $nombre_persona;
echo $palabraY;
echo "<br/>";

//Eliminar espacios en blanco
$texto = trim($nombre_persona);
echo strlen($texto);
echo $texto;
echo "<br/>";

//Convertirlo en mayusculas
echo strtoupper($nombrePersona);
echo "<br/>";

//Convertirlo en minusculas
echo strtolower($nombrePersona);
echo "<br/>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 == $mail2);
echo "<br/>";

var_dump(strtolower($mail1) == strtolower($mail2));
echo "<br/>";

//Remplazar
echo str_replace("Victor", "V", $nombrePersona);
echo "<br/>";

//Revisar si un string existe o no
echo strpos($nombrePersona, "i");
echo "<br/>";

echo $palabraX . $nombre_persona . $palabraY;
echo "<br/>";

echo "Good {$nombre_persona} Moorning";



include 'includes/footer.php';