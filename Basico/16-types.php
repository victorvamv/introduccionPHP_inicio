<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?int{
    if ($autenticado) {
        echo "El usuario a sido autenticado";
    }else {
        echo "El usuario no ha sido autenticado";
    }

    return 4;
}

// $usuario = usuarioAutenticado(true);

// echo $usuario;


echo usuarioAutenticado(true);

include 'includes/footer.php';