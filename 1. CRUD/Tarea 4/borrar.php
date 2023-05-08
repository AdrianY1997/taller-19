<?php

include("conexion.php");
$conexion = conectar();
$consulta = "TRUNCATE TABLE producto";
mysqli_query($conexion, $consulta);
echo "Los registros Se eliminaron con exito";
header("Location: index.html");

?>