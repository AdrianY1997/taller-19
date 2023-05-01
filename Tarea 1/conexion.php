<?php 

function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "tienda1", 3306);
    return $conexion;
}

function desconectar($conexion)
{
    mysqli_close($conexion);
}


?>