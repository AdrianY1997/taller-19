<?php

class ErrorController {
    public function __construct() {
        // echo "error 404";
    }

    public function index() {
        echo "error 404";
    }

    public function error405() {
        echo "error 405";
    }
}