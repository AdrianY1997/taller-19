<?php
class Proveedor {
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
            $this->pdo = Database::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar() {
        try {
            $result = [];
            //Sentencia SQL para selección de datos.
            $stmt = $this->pdo->prepare("SELECT * FROM proveedor");
            //Ejecución de la sentencia SQL.
            $stmt->execute();
            //fetchAll — Devuelve un array que contiene todas las filas del conjunto
            //de resultados
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            //Obtener mensaje de error.
            die($e->getMessage());
        }
    }

    //Este método obtiene los datos del proveedor a partir del nit
    //utilizando SQL.
    public function obtener($nit) {
        try {
            //Sentencia SQL para selección de datos utilizando
            //la cláusula Where para especificar el nit del proveedor.
            $stm = $this->pdo->prepare("SELECT * FROM proveedor WHERE nit = ?");
            //Ejecución de la sentencia SQL utilizando el parámetro nit.
            $stm->execute([$nit]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //Este método elimina la tupla proveedor dado un nit.
    public function eliminar($nit) {
        try {
            //Sentencia SQL para eliminar una tupla utilizando
            //la cláusula Where.
            $stm = $this->pdo->prepare("DELETE FROM proveedor WHERE nit = ?");
            $stm->execute([$nit]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //Método que actualiza una tupla a partir de la cláusula
    //Where y el nit del proveedor.
    public function actualizar($data) {
        try {
            //Sentencia SQL para actualizar los datos.
            $sql = "UPDATE proveedor SET razonS = ?, dir = ?, tel = ? WHERE nit = ?";
            //Ejecución de la sentencia a partir de un arreglo.
            $this->pdo->prepare($sql)
                ->execute(
                    [
                        $data->razonS,
                        $data->dir,
                        $data->tel,
                        $data->nit
                    ]
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //Método que registra un nuevo proveedor a la tabla.
    public function registrar(proveedor $data) {
        try {
            //Sentencia SQL.
            $sql = "INSERT INTO proveedor (nit,razonS,dir,tel) VALUES (?, ?, ?, ?)";
            $this->pdo->prepare($sql)->execute(
                [
                    $data->nit,
                    $data->razonS,
                    $data->dir,
                    $data->tel,
                ]
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
//Este método selecciona todas las tuplas de la tabla
//proveedor en caso de error se muestra por pantalla