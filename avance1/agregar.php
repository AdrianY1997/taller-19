<?php
include ("conexion.php");
$con=conectar();
$codprodu = $_POST["codigoproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$sentencia = "INSERT INTO productos (codprod,nombre, descripcion) VALUES ('$codprodu','$nombre', '$descripcion')";

$rest = mysqli_query($con, $sentencia) or die ('Error: '. mysqli_error($con));
header('Location:' . getenv('HTTP_REFERER'));

?>

