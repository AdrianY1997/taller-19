<?php

require_once 'model/database.php';
$controller = 'proveedor';

if (!isset($_REQUEST['c'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller';
    $controller = new $controller; 
    
}


?>