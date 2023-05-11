<?php

if (!isset($_REQUEST["url"])) header("Location: inicio");
$url = explode("/", $_REQUEST["url"]);

$controller = ucfirst(array_shift($url)) . "Controller";
$action = array_shift($url) ?? "index";
$param = $url;

$controllerPath = "Controller/" . $controller . ".php";

if (is_file($controllerPath)) include_once $controllerPath;
else {
    include_once "Controller/ErrorController.php";
    $controller = "ErrorController";
    $action = "index";
}

$controller = new $controller();
if (method_exists($controller, $action)) {
    call_user_func_array([$controller, $action], $param);
}