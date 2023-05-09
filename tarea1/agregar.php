<?php
include ("conexion.php");
$con=conectar();
$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$sentencia = "INSERT INTO productos (idproducto,nombre, descripcion) VALUES ('$idproducto','$nombre', '$descripcion')";

$rest = mysqli_query($con, $sentencia) or die ('Error: '. mysqli_error($con));
header('Location:' . getenv('HTTP_REFERER'));

?>

