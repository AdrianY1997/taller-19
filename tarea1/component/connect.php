<?php
function connect() {
    $dbc = mysqli_connect('localhost', 'root', '', null, 3306);
    $dbc->set_charset("utf8mb4");
    return $dbc;
}
