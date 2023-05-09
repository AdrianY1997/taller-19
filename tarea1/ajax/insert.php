<?php
include '../component/connect.php';
$conn = connect();

$codigo = $_POST["cod"];
$nombre = $_POST["nam"];
$descripcion = $_POST["des"];

$data = [];
$isEmpty = true;

$query = "SELECT id FROM tarea1.products WHERE codigo = '$codigo'";

try {
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) $isEmpty = false;
} catch (mysqli_sql_exception $e) {
    $data["error"] = $e;
    $data["isOk"] = false;
    echo json_encode($data);
    exit;
}

if (!$isEmpty) {
    $data["isOk"] = false;
    $data["code"] = 1;
    echo json_encode($data);
    exit;
} else {
    $query = "INSERT INTO tarea1.products (codigo, name, description) VALUES ('$codigo', '$nombre', '$descripcion')";

    try {
        mysqli_query($conn, $query);
        $data["isOk"] = true;
    } catch (mysqli_sql_exception $e) {
        $data["error"] = $e;
        $data["isOk"] = false;
    }

    echo json_encode($data);
    exit;
}