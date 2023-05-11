<?php
    require_once 'model/producto.php'; 

    class ProductoController{
        private $model; 
        public function __construct(){
            $this -> model = new producto();
        }

        public function Index(){
            require_once 'view/header.php';
            require_once 'view/producto/producto.php';
            require_once 'view/footer.php';
        }

        public function Crud(){
            $prod = new producto(); 
            if(isset($_REQUEST['idProducto'])){
                $prod = $this -> model -> Obtener($_REQUEST['idProducto']); 
            }
            require_once 'view/header.php';
            require_once 'view/producto/producto-editar.php';
            require_once 'view/footer.php';
        }

        public function Nuevo(){
            $prod = new producto(); 
            require_once 'view/header.php';
            require_once 'view/producto/producto-nuevo.php';
            require_once 'view/footer.php';
        }

        public function Guardar(){
            $prod = new producto(); 
            $prod -> idProducto = $_REQUEST['idProd']; 
            $prod -> nit = $_REQUEST['nit'];
            $prod -> nomprod = $_REQUEST['idProd'];
            $prod -> idProd = $_REQUEST['idProd'];
            $prod -> idProd = $_REQUEST['idProd'];
        }
    }

?>