<?php
function conectar(){

$server = "localhost";
$user = "root";
$pass = "";
$db = "tienda";

$conexion = mysqli_connect($server, $user,$pass, $db) or die ("No se ha podido conectar al servidor de Base de datos");

return $conexion;
}
function desconectar($conexion){
mysqli_close($conexion);
}

?>