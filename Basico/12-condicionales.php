<?php include 'includes/header.php';

$lenguaje1 = strtoupper("javascript");
$lenguaje2 = strtoupper("php");
$lenguaje3 = strtoupper("html");

$tecnologia = $lenguaje3;

switch($tecnologia){

    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'JAVASCRIPT':
        echo "Genial, el lenguaje de la WEB";
        break;
    case 'HTML':
        echo "Emmm....";
        break;
    default:
        echo "Algun otro lenguaje";
        break;
}

echo "<br>";

$condicion = "otro";
$verdad = false;
if ($condicion === "vagabundo") {
    echo "Es vagabundo";
    
    if(!$verdad){
        echo " y esta perdido";
    }else{
        echo " pero no esta perdido";
    }

} else if ($condicion != "vagabundo"){
    echo "Puede que no este perdido y sea verdadero";
}




include 'includes/footer.php';