<?php

include ('conexion2.php');
$conexion=Conectar();
$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = "INSERT INTO producto (codigo, nombre, descripcion) VALUES ('$idproducto', '$nombre', '$descripcion')";
$rew = mysqli_query($conexion,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conexion));
var_dump($rew);
echo "REGISTRO EXITOSO";
header('Location:' . getenv('HTTP_REFERER'));

?>
