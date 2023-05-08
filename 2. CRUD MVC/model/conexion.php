<?php 

class conexionDatabase{
    public static function conectar(){

        $conexion = new PDO('mysql:host=localhost;port=8080;dbname=mvc', 'root', ''); 
    }
}

?>