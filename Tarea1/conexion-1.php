<?php

function conectar()
{
    $usuario = "root";
    $contraseña = "";
    $servidor = "localhost";
    $base = "tiendaejemplo";  

    $con = mysqli_connect($servidor, $usuario, $contraseña, $base);
    if ($con->connect_error) {
        die("conexion fallida" . $con->connect_error);


    }

    return $con;
}

?>