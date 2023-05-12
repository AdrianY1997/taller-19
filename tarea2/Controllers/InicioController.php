<?php

class InicioController {
    public function __construct() {
        // echo "inicio";
    }

    public function index() {
        render("Views/home.html");
    }
}