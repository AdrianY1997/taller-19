<?php
include '../component/connect.php';
$conn = connect();

$search = $_POST["search"];
$data = [];
$likeText = "";

if (trim($search)) $likeText = " WHERE name LIKE '%$search%'";

$query = "SELECT * FROM tarea1.products$likeText";

try {
    if ($result = mysqli_query($conn, $query)) {
        $items = [];

        if (mysqli_num_rows($result) == 0) $data["isEmpty"] = true;

        while ($row = mysqli_fetch_object($result)) {
            $item = [
                "id" => $row->id,
                "codigo" => $row->codigo,
                "name" => $row->name,
                "description" => $row->description
            ];
            array_push($items, $item);
        }
        $data["rows"] = $items;
    }
} catch (Throwable $e) {
    $data["error"] = mysqli_error($conn);
}

echo json_encode($data);
