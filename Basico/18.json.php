<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 4000,
        "disponible" => true
    ],
    [
        "nombre" => "Television",
        "precio" => 6000,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
    ]
];

echo "<pre>"; 
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';