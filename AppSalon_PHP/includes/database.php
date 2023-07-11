<?php

$db = mysqli_connect('localhost', 'turin', '5220', 'appsalon');

if(!$db) {
    echo "Hubo un error";
    exit;
}