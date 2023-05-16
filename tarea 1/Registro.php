<?php
include ("conexion.php");
$con=conexion();
$codproducto = $_POST["codproducto"];
$nameproducto = $_POST["nameproducto"];
$desproducto = $_POST["descproducto"];
$sentencia = "INSERT INTO producto (codproducto,nameproducto,descproducto) VALUES ('$codproducto','$nameproducto','$desproducto')";

$rest = mysqli_query($con, $sentencia) or die ('Error:' .mysqli_errno($con));

header('location:'.getenv('HTTP_REFERER'));

?>