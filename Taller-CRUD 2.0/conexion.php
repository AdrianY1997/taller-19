<?php
    $server = "localhost";
    $user = "root";
    $password= ""; 
    $baseDatos = "tienda-mi plaza";

    $conectar = mysqli_connect($server, $user, $password,  $baseDatos);

    if(!$conectar){
        die("Connection failed:".mysqli_connect_error());
    }
    // echo"Conexion exitosa";

    function desconectar($conectar){
        return mysqli_close($conectar);
    }
    return $conectar;
?>
