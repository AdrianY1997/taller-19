<?php

require_once "model/proveedor.php";
class ProveedorController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new proveedor();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/proveedor/proveedor.php';
        require_once 'view/footer.php';
    }

    public function Crud( ){
        $pvd = new proveedor();

        if(isset($_REQUEST['nit'])){
        $pvd = $this->model->Obtener($_REQUEST['nit']);
        }
        require_once 'view/header.php';
        require_once 'view/proveedor/proveedor-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $pvd = new proveedor();
        require_once 'view/header.php';
        require_once 'view/proveedor/proveedor-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $pvd = new proveedor();
        $pvd->nit = $_REQUEST['nit'];
        $pvd->razonS = $_REQUEST['razonS'];
        $pvd->dir = $_REQUEST['dir'];
        $pvd->tel = $_REQUEST['tel'];
        $this->model->Registrar($pvd);
        header('Location: index.php');
        }

    public function Editar(){
        $pvd = new proveedor();
        $pvd->nit = $_REQUEST['nit'];
        $pvd->razonS = $_REQUEST['razonS'];
        $pvd->dir = $_REQUEST['dir'];
        $pvd->tel = $_REQUEST['tel'];
        $this->model->Actualizar($pvd);
        header('Location: index.php');
        }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['nit']);
        header('Location: index.php');
    }
}