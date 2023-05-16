<?php
//Se incluye el modelo donde conectará el controlador.
require_once "Model/Proveedor.php";

class ProveedorController {
    private $model;
    //Creación del modelo
    public function __CONSTRUCT() {
        $this->model = new Proveedor();
    }
    //Llamado plantilla principal
    public function Index() {
        require_once 'View/header.php';
        require_once 'View/proveedor/proveedor.php';
        require_once 'View/footer.php';
    }

    //Llamado a la vista proveedor-editar
    public function crud() {
        $pvd = new Proveedor();
        //Se obtienen los datos del proveedor a editar.
        if (isset($_REQUEST['nit'])) {
            $pvd = $this->model->Obtener($_REQUEST['nit']);
        }
        //Llamado de las vistas.
        require_once 'View/header.php';
        require_once 'View/proveedor/proveedor-editar.php';
        require_once 'View/footer.php';
    }

    //Llamado a la vista proveedor-nuevo
    public function nuevo() {
        $pvd = new Proveedor();
        //Llamado de las vistas.
        require_once 'View/header.php';
        require_once 'View/proveedor/proveedor-nuevo.php';
        require_once 'View/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function guardar() {
        $pvd = new Proveedor();
        //Captura de los datos del formulario (vista)
        $pvd->nit = $_REQUEST['nit'];
        $pvd->razonS = $_REQUEST['razonS'];
        $pvd->dir = $_REQUEST['dir'];
        $pvd->tel = $_REQUEST['tel'];
        //Registro al modelo proveedor.
        $this->model->registrar($pvd);
        //header() es usado para enviar encabezados HTTP sin formato.
        //”Location:” No solamente envía el encabezado al navegador, sino que 
        //también devuelve el código de status (302) REDIRECT al 
        //navegador
        header('Location: index.php');
    }

    //Método que modifica el modelo de un proveedor.
    public function editar() {
        $pvd = new proveedor();
        $pvd->nit = $_REQUEST['nit'];
        $pvd->razonS = $_REQUEST['razonS'];
        $pvd->dir = $_REQUEST['dir'];
        $pvd->tel = $_REQUEST['tel'];
        $this->model->Actualizar($pvd);
        header('Location: index.php');
    }

    //Método que elimina la tupla proveedor con el NIT dado.
    public function eliminar() {
        $this->model->Eliminar($_REQUEST['nit']);
        header('Location: index.php');
    }
}