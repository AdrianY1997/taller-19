<?php
include '../component/connect.php';
$conn = connect();

$data = [];

$query = "TRUNCATE tarea1.products";

try {
    if (mysqli_query($conn, $query)) {
        $data["isTruncated"] = true;
    }
} catch (\Throwable $th) {
    $data["error"] = mysqli_error($conn);
    echo json_encode($data);
    exit;
}

echo json_encode($data);
exit;