<?php
include '../component/connect.php';
$conn = connect();

$id = $_POST["id"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$data = [];

$query = "SELECT user, pass FROM tarea1.users WHERE user = '$user'";

try {
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $data["isUser"] = true;
        $row = mysqli_fetch_object($result);
        $data["user"] = $row->user;
        if (password_verify($pass, $row->pass)) {
            $data["passValid"] = true;
        } else {
            $data["passValid"] = false;
            echo json_encode($data);
            exit;
        }
    } else {
        $data["isUser"] = false;
        echo json_encode($data);
        exit;
    }
} catch (\Throwable $e) {
    $data["error"] = $e;
    echo json_encode($data);
    exit;
}

$query = "DELETE FROM tarea1.products WHERE id = $id";
try {
    $result = mysqli_query($conn, $query);
    if ($result) {
        $data["deleted"] = true;
    } else {
        $data["deleted"] = false;
    }
} catch (\Throwable $e) {
    $data["error"] = $e;
    echo json_encode($data);
    exit;
}

echo json_encode($data);
exit;