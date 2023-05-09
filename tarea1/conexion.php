<?php
function conectar(){

$servidor = "localhost";
$usuario = "root";
$pasw = "";
$db = "tienda";

$conexion = mysqli_connect($servidor, $usuario,$pasw, $db) or die ("No se ha podido conectar al servidor de Base de datos");
return $conexion;
}
?>