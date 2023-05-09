<?php
function Conectar(){
    $host="localhost";
    $username="root";
    $contra="";
    $database="supermercado";

    $conexion = mysqli_connect($host,$username,$contra,$database);
    return $conexion;
}

function Desconectar($conexion){
    mysqli_close($conexion);
}

?>