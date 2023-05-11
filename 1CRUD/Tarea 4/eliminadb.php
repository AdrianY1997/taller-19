<?php
include ('conectar.php');
$con=conecta();
$nombredb=$_POST['nombredb'];
$cadena=trim($nombredb);

$eliminardbsql = "DROP DATABASE ".$cadena."";
$stmt = $con->prepare($eliminardbsql);
if($stmt->execute()){
    echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADO CON EXITO PERDIO TODO REGISTRO');window.location='index.php'</script>";
    //header("Location: index.html");
}else{
    echo "<script>alert('LA BASE DE DATOS NO EXISTE');window.location='elimina2db.php'</script>";
    //header('Location:' . getenv('HTTP_REFERER'));
}
?>
