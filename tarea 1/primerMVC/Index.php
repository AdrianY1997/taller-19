<?php
 //Se incluye la configuración de conexión a datos en el
 //SGBD: MariaDB.
 require_once 'model/database.php';
 //Para registrar productos es necesario iniciar los proveedores
 //de los mismos, por ello la variable controller para este
 //ejercicio se inicia con el ‘proveedor’.
 $controller = 'proveedor';
 //  toda esta lógica hará el papel de un FrontController
 if(!isset($_REQUEST['c']))
 {
 //Llamado de la página principal
 require_once "controller/$controller.controller.php";
 $controller = ucwords($controller) . 'Controller';
 $controller = new $controller;
 $controller->Index();
 }
 else
 {
 // Obtiene el controlador a cargar
 $controller = strtolower($_REQUEST['c']);
 $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
 // Instancia el controlador
 require_once "controller/$controller.controller.php";
 $controller = ucwords($controller) . 'Controller';
 $controller = new $controller;
 // Llama la acción
 call_user_func( array( $controller, $accion ) );
 }
