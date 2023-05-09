<?php

include('conexion.php');
$conexion=Conectar();
$idproducto=$_POST["idproducto"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];

$sentencia = "INSERT INTO producto (codigo, nombre, describir) VALUES ('".$idproducto."', '".$nombre."', '".$descripcion."')";
mysqli_query($conexion,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conexion));
var_dump($row);
echo "REGISTRO EXITOSO";
header('Location:' . getenv('HTTP_REFERER'));

?>

    