<?php

class Database {
    //Esta función permite la conexión al SGBD: MariaDB.
    //host = tipo de conexión local - ‘localhost’.
    //dbname = nombre de la base de datos.
    //charset = utf8, indica la codificación de caracteres utilizada.
    //root = nombre de usuario (solo para fines académicos=root).
    //’’ = contraseña del root (solo para fines académicos).
    public static function Conectar() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=mvc_php;charset=utf8', 'root', ' ');
        } catch (PDOException $ex) {
            echo $ex;
        }
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}