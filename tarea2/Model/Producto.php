<?php
class Producto {
	//Atributo para conexión a SGBD
	private $pdo;
	//Atributos del objeto proveedor 
	public $idProducto;
	public $nit;
	public $nomprod;
	public $precioU;
	public $descrip;
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
			$stm = $this->pdo->prepare('SELECT * FROM producto');
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function obtener($idProducto) {
		try {
			$stm = $this->pdo->prepare('SELECT * FROM producto WHERE idProducto = ?');
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function eliminar($idProducto) {
		try {
			$stm = $this->pdo
				->prepare('DELETE FROM producto WHERE idProducto = ?');
			$stm->execute(array($idProducto));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function actualizar($data) {
		try {
			$sql = 'UPDATE producto SET nomprod = ?, precioU = ?, descrip = ? WHERE idProducto = ?';
			$this->pdo->prepare($sql)
				->execute(
					[
						$data->nomprod,
						$data->precioU,
						$data->descrip,
						$data->idProducto
					]
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function registrar(producto $data) {
		try {
			$sql = 'INSERT INTO producto (idProducto,nit,nomprod,precioU,descrip) VALUES (?, ?, ?, ?,?)';
			$this->pdo->prepare($sql)
				->execute(
					[
						$data->idProducto,
						$data->nit,
						$data->nomprod,
						$data->precioU,
						$data->descrip
					]
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}