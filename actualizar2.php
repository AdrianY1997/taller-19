<?php
include ('conexion.php');
$online = conexion();

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$select = "UPDATE productos SET codigo = '$codigo', nombre = '$nombre', descripcion = '$descripcion' WHERE id = '$id'";
$leer = mysqli_query($online, $select);

if($leer){
    Header("location: index.php");
};
?>