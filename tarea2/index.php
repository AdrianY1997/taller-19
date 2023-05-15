<?php

include_once "Controller/ErrorController.php";
include_once 'Model/Database.php';


if (!isset($_REQUEST["url"])) header("Location: inicio");

// Obtengo la url y si esta no existe entonces asigno "inicio" por defecto
$url = $_REQUEST["url"];

// Subdivido la cadena según el carácter "/"
$url = explode("/", $url);

// Asigno a su respectiva variable cada valor
$controller = array_shift($url);
$function = array_shift($url) ?? "index";
$param = $url;

// Genero la ruta y el nombre del controlador
$controllerPath = "Controller/" . ucfirst($controller) . "Controller.php";
$controllerClass = ucfirst($controller) . "Controller";

// Valido si la ruta al controlador existe
if (file_exists($controllerPath)) {
    // Incluyo el controlador y hago una instancia
    include_once $controllerPath;
    $c = new $controllerClass();

    // Compruebo si el método existe
    if (method_exists($c, $function)) {
        // Invoco el método
        $c->$function();
    } else {
        // Si no existe el método invoco el error 405
        $error = new ErrorController();
        $error->error405();
    }
} else {
    // Si no existe el controlador invoco el error 404
    $c = new ErrorController();
    $c->error404();
}
