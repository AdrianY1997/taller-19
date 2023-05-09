<?php
include('conexion-1.php');
$conecta = conectar();

$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = "INSERT INTO producto (codigoproducto, nombreproducto, descripcion) VALUES ('$idproducto', '$nombre', '$descripcion')";

var_dump($sentencia);

mysqli_query($conecta, $sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO" . mysqli_error($conecta));
echo "REGISTRO EXITOSO";
header('Location:' . getenv('HTTP_REFERER'));
?>