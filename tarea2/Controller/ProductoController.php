<?php
require_once 'Model/Producto.php';
class ProductoController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new Producto();
    }
    //Llamado plantilla principal
    public function index() {
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function crud() {
        $prod = new Producto();

        if (isset($_REQUEST['idProducto'])) {
            $prod = $this->model->Obtener($_REQUEST['idProducto']);
        }
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function nuevo() {
        $prod = new Producto();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function guardar() {
        $prod = new Producto();
        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];
        $this->model->registrar($prod);
        header('Location: index.php?c=producto');
    }

    public function editar() {
        $prod = new Producto();
        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nit = $_REQUEST['nit'];
        $prod->nomprod = $_REQUEST['nomprod'];
        $prod->precioU = $_REQUEST['precioU'];
        $prod->descrip = $_REQUEST['descrip'];
        $this->model->actualizar($prod);
        header('Location: index.php?c=producto');
    }

    public function eliminar() {
        $this->model->eliminar($_REQUEST['idProducto']);
        header('Location: index.php');
    }
}
