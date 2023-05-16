<?php
function conexion(){
    $Servidor = "localhost";
    $Usuario = "root";
    $Contraseña = "";
    $Database = "tiendas";

    $Conexion = mysqli_connect( $Servidor, $Usuario,$Contraseña,$Database) or die ("No se ha pododo conectar la base de datos");
    return $Conexion;
}
?>