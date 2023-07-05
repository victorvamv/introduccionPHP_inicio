<?php include 'includes/header.php';
$carrito = ["Tablet", "Television", "Computadora"];

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array

echo $carrito[2];

//Añade un elemento en el indice 3 del arreglo
$carrito[3] = "Telefono";

// Añadir un elemento al final
array_push($carrito, "Audifono");

// Añadir al inicio
array_unshift($carrito, "Monitor");

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array("Cliente1", "Cliente2", "Clientes3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';