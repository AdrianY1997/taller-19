<?php
function conectar(){
$host = "localhost";
$usuario = "root";
$contraseña = "";
$bstienda = "bstienda";
$port=3306;

$conexion = mysqli_connect($host, $usuario, $contraseña, $bstienda,$port) or die("Error");
  return $conexion;
}
function desconectar ($conexion){
mysqli_close($conexion);
}
?>