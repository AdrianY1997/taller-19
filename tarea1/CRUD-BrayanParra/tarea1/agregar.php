<?php
include ("conexion.php");
$con=conectar();
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$sentencia = "INSERT INTO productos (id,nombre, descripcion) VALUES ('$id','$nombre', '$descripcion')";

$rest = mysqli_query($con, $sentencia) or die ('Error: '. mysqli_error($con));
header('Location:' . getenv('HTTP_REFERER'));

?>

