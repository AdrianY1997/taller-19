<?php
function conectar (){
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bdtienda = "tienda";
    $conectar = mysqli_connect ($servidor, $usuario, $contraseña, $bdtienda);
    return $conectar;
}
function desconectar ($conectar){
    mysqli_close($conectar);
}
?>
