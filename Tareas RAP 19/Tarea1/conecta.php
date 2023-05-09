<?php

function conecta() {
    $link = mysqli_connect("localhost", "root", "", "tienda2");
    return $link ? $link : false;
}