<?php
include ("conectar.php");
$con = conecta();

$query = "TRUNCATE TABLE producto";
$stmt = $con->prepare($query);

if($stmt->execute()) {
    echo "<p>LOS REGISTROS SE ELIMINARON CON EXITO.</p><p><a href='elimina.php'>VOLVER ATRÁS</a></p>";
} else {
    echo "Error al eliminar los registros";
}
?>