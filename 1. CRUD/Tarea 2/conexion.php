<?php 

function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "tienda1", 3306);
    return $conexion;
}

function desconectar($conexion)
{
    // Usamos mysqli_close() para cerrar la conexion
    $desconect = mysqli_close($conexion);
    // Retornamos la conexion la conexion designandole un valor booleano
    return $desconect ? true : false; 
}


?>