<?php
class Database{

    private $dbname = "tienda";
    private $tablename = "producto";
    private $username = "root";
    private $hostname = "localhost";
    private $charset = "utf8mb4";
    private $password = "";
    private $pdo = null;
    
    function conectar (){
        try{
            $conexion = "mysql:host=".$this->hostname.";dbname=".$this->dbname.";charset=".$this->charset;
            $options =[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            // variable que contiene la conexion
            $this-> pdo = new PDO ($conexion, $this->username, $this->password, $options);
            return $this-> pdo;
        }

        catch(PDOException $e){
            echo "Error de conexion" .$e->getMessage();
            exit;
        }
    }


    function desconectar (){
        $this->pdo = null;
    }
}
 