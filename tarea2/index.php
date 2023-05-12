<?php

include_once "Controllers/ErrorController.php";
include_once "helper.php";

$url = $_REQUEST["url"] ?? "inicio";
$url = explode("/", $url);

$controller = $url[0];
$function = $url[1] ?? "index";
$param = $url[2] ?? null;

$controllerPath = "Controllers/" . ucfirst($controller) . "Controller.php";
$controllerClass = ucfirst($controller) . "Controller";

if (file_exists($controllerPath)) {
    include_once $controllerPath;
    $c = new $controllerClass();
    if (method_exists($c, $function)) {
        $c->$function();
    } else {
        $error = new ErrorController();
        $error->error405();
    }
} else {
    $c = new ErrorController();
    $c->index();
}