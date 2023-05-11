<?php
include '../component/connect.php';
$conn = connect();

$id = $_POST["id"];
$codigo = $_POST["cod"];
$nombre = $_POST["nam"];
$descripcion = $_POST["des"];

$data = [];
$isEmpty = true;
$query = "UPDATE tarea1.products SET codigo = '$codigo', name = '$nombre', description = '$descripcion' WHERE id = $id";
try {
    mysqli_query($conn, $query);
    $data["isOk"] = true;
} catch (mysqli_sql_exception $e) {
    $data["error"] = $e;
    $data["isOk"] = false;
}

echo json_encode($data);
exit;