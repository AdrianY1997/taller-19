<title>sirve</title>

<?php

include ('conexion.php');
$conectar=conectar();
$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = "INSERT INTO tienda(codigo_del_producto, Nombre, Descripcion) VALUES ('$idproducto', '$nombre', '$descripcion')";
$rest = mysqli_query($conectar,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conectar));
echo "REGISTRO EXITOSO";
 header('Location:' . getenv('HTTP_REFERER'));
?>
