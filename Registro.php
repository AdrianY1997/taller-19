<?php
include ("conexion.php");
$con=conexion();
$Codproducto = $_POST["Codproducto"];
$Nombre = $_POST["Nombre"];
$Descripcion = $_POST["Descripcion"];
$sentencia = "INSERT INTO productos (Codproducto,Nombre,Descripcion) VALUES ('$Codproducto','$Nombre','$Descripcion')";

$rest = mysqli_query($con, $sentencia) or die ('Error: ' .mysqli_errno($con));

header('location:'.getenv('HTTP_REFERER'));

?>