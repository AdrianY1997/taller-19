<?php
include ('conexion.php');
$conectar=conectar();
$Codigodelproducto = $_POST["Codigodelproducto"];
$Nombre = $_POST["Nombre"];
$Descripcion = $_POST["Descripcion"];
$sentencia = "INSERT INTO tienda (Codigodelproducto, Nombre, Descripcion) VALUES ('$Codigodelproducto', '$Nombre', '$Descripcion')";
$rest = mysqli_query($conectar,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conectar));
echo "REGISTRO EXITOSO";
header('Location:' . getenv('HTTP_REFERER'));
?>
