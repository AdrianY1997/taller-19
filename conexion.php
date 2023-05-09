<?php
function Conectar(){
    $host="localhost";
    $usenom="root";
    $contra="";
    $basededatos="tiendita";
    $port=1002;
    
    $conexion = mysqli_connect($host,$usenom,$contra,$basededatos,$port);
    return $conexion;
}
function Desconectar($conexion){
    mysqli_close($conexion);
}

?>