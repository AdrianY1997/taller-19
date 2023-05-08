<?php 
class conexionDatabase{
    public static function conectar(){
        try{
            $conexion = new PDO('mysql:host=localhost;port=8080;dbname=mvc', 'root', ''); 
            return $conexion; 

        }catch(PDOException $e){
            return "Error al Conectar la Base de datos". $e -> getMessage(); 
        } 
        
    }
}
?>