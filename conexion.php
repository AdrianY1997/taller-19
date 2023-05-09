<?php
function conexion (){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tarea1";

    $conectar = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conectar, $db);

    return $conectar;   
}   
?>