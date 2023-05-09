<?php
include 'conectar.php';
$con = conecta();

if (isset($_POST['no'])) {
    $no = $_POST['no'];
    $query = "DELETE FROM producto WHERE idproducto = :idproducto";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':idproducto', $no);
    if ($stmt->execute()) {
        header("Location: elimina.php");
    } else {
        echo "Error al eliminar el registro";
    }
}
?>
