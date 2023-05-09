<?php
include ("tarea1.php");
$conecta=conectar();
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = "INSERT INTO producto (codigo,nombre,descripcion) VALUES ('.$codigo.', '.$nombre.', '.$descripcion.')";
mysqli_query($conecta,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conecta));
echo "REGISTRO EXITOSO";
header('Location:'.getenv('HTTP_REFERER'));
?>
