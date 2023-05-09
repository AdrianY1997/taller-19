<?php
$port = "localhost";
$rol = "root";
$pasword = "";
$bd = "tienda";

// conexión a la base de datos
$conecta = mysqli_connect($port, $rol, $pasword, $bd);
 return $conecta;
mysqli_set_charset($conecta, "utf8");


// función para desconectar la base de datos
function desconectar ($conecta){
    return mysqli_close($conecta);
}


?>