<?php
//Incluimos la configuracion de la conexion de la base de datos
include('conecta.php');
//Establecemos la conexion
$conexion = Conectar();
//Registramos los valores del index.php
$idpro = $_POST['idpro'];
$nompro = $_POST['nompro'];
$descr = $_POST['descr'];
if(is_numeric($idpro)){
    //Preparamos la sentencia sql 
$sentencia = "INSERT INTO productos (idproducto,nomproducto,descripcion) VALUES ('".$idpro."','".$nompro."','".$descr."')";
//Realiza la conexion de la base de datos y la sentencia
mysqli_query($conexion,$sentencia) or die ("No se logra insertar registro". mysqli_error($conexion));
echo "<script>alert('Registro exitoso');window.location='index.php'</script>";
}else{
    echo "<script>alert('Solo se aceptan numeros en el Id');window.location='index.php'</script>";
}


?>