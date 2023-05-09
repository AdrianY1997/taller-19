<?php 
function Conectar(){
    $local = "localhost";
    $rot = "root";
    $pass = "";
    $bd= "tiendalucho";
    $con = mysqli_connect($local,$rot,$pass,$bd);
    return $con;
}
function Desconectar($con){
    mysqli_close($con);
}
?>