<?php
include ("conectar.php");
$con = conecta();

$query = "TRUNCATE TABLE producto";
$stmt = $conecta->prepare($query);

if($stmt->execute()) {
    echo "<p>LOS REGISTROS SE ELIMINARON CON EXITO.</p><p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>";
} else {
    echo "Error al eliminar los registros";
}
?>
