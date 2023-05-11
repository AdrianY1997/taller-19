<?php

include("conexion.php");
$conexion = conectar();
$CodProd = $_POST["ctCodProd"];
$NameProd = $_POST["ctNameProd"];
$DesProd = $_POST["txtDesProd"];

$sql = "INSERT INTO producto(id, nameprod, desprod) VALUES ('$CodProd','$NameProd', '$DesProd')";
mysqli_query($conexion, $sql) or die ("No se logra insertar el registro".mysqli_error($conexion));
echo "Registro Exitoso";

$CodProd = "";
$NameProd = "";
$DesProd = "";


if (desconectar($conexion)) {
    echo "Desconexion Exitosa";
    header('Location:index.html');
} else{
    echo "Desconexion fallida";
}

?>
