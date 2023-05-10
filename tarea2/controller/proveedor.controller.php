<?php
class proveedor {
    //Atributo para conexión a SGBD
    private $pdo;
    //Atributos del objeto proveedor 
    public $nit;
    public $razonS;
    public $dir;
    public $tel;
    //Método de conexión a SGBD.
    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
//Este método selecciona todas las tuplas de la tabla
//proveedor en caso de error se muestra por pantalla