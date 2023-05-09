<?php
include('conexion-1.php');
$conecta = conectar();

$id = $_GET["id"];

$sentencia = "Delete from producto where id='$id'";
mysqli_query($conecta, $sentencia) or die ("NO SE LOGRA ELIMINAR" . mysqli_error($conecta));
echo "ELIMINACION EXITOSA";
header('Location:' . getenv('HTTP_REFERER'));
?>