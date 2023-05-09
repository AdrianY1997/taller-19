<?php
include ("conecta.php");
$conecta = $conecta;
$consulta = "TRUNCATE TABLE producto";  
$result = mysqli_query( $conecta, $consulta);  
echo "<p>LOS REGISTROS SE ELIMINARON CON EXITO.</p>  <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 







?>