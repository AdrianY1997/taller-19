<?php 

class proveedor{
    private $pdo; 
    public $nit; 
    public $razonS; 
    public $dir; 
    public $tel; 

    public function __construct(){
        try{
            $this -> pdo = conexionDatabase::conectar(); 
        } catch(Exception $e){
            die($e -> getMessage()); 
        }
    }

    public function Listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM proveedor");
            $stm -> execute(); 
            return $stm -> fetchAll(PDO::FETCH_OBJ);   
        }catch(Exception $e){
            die($e -> getMessage());
        }
    }

    public function Obtener($nit){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM proveedor WHERE nit = ?");
            $stm -> execute();
            return $stm -> fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e -> getMessage());
        }
    }

    public function Eliminar($nit){
        try{
            $stm = $this->pdo->prepare("DELETE FROM proveedor WHERE nit = ?");
            $stm -> execute(array($nit));
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function Actualizar($data){
        try{
            $sql = "UPDATE proveedor SET razonS=?, dir=?, tel=? WHERE nit=?";
            $this ->pdo->prepare($sql)->execute(array(
                $data->razonS,
                $data->dir,
                $data->tel,
                $data->nit
            ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Registrar(proveedor $data){
        try{
            $sql = "INSERT INTO proveedor(nit, razonS, dir, tel) VALUES (?, ?, ?, ?)"; 
            $this->pdo->prepare($sql)->execute(array(
                $data->nit, 
                $data->razonS, 
                $data->dir, 
                $data->tel));
        }catch(Exception $e){
            die($e -> getMessage()); 
        }
    }
}

?>