<?php
include ('conexion.php');
$online = conexion();

$id = null;
$codigo = $_POST ['codigo'];
$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];

$select = "insert into productos VALUES ('$id', '$codigo', '$nombre', '$descripcion')";
$leer = mysqli_query ($online, $select);

if ($leer) {
    Header("Location: index.php");
};
?>