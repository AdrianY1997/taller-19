<?php
include ("conexion.php");
$con=conectar();
$codprodu = $_POST["codproduc"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["Descripcion"];
$sentencia = "INSERT INTO productos (codproduc,nombre, Descripcion) VALUES ('$codprodu','$nombre', '$descripcion')";

$rest = mysqli_query($con, $sentencia) or die ('Error: '. mysqli_error($con));
echo "REGISTRO EXITOSO";

header('Location:' . getenv('HTTP_REFERER'));

?>

