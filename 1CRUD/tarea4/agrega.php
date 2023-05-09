<?php
include ('conecta.php');

$conecta=$conecta;
$idproducto = $_POST["idproducto"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

// insertar datos a la base de datos 
$sentencia = "INSERT INTO producto (codigo_pro, nombre_pro, descripcion_pro) VALUES ('$idproducto', '$nombre', '$descripcion')";

// mostar error 
mysqli_query($conecta,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO" . mysqli_error($conecta));
echo "REGISTRO EXITOSO";

// desconexión de la base de datos despues del registro 
if( desconectar ($conecta)){
    echo "SE DESCONECTO CORRECTAMENTE";
    header('location:index.html');
}

?>
