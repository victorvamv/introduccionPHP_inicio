<?php

function consultaClientes() {
    
    try {
        // Importar las caracteristicas
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM clientes WHERE nombre='Victor';";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

consultaClientes();