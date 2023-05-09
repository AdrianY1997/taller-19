<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="editar.css">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include ("conexion.php");
$conecta=conectar();
$id = $_GET['id'];
echo $id;
$sql = "SELECT * from productos";
$result = mysqli_query($conecta, $sql);
$row = mysqli_fetch_object($result);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombre;?>" name="nombre">
	<input type="text" value="<?php echo $row->descripcion;?>" name="Descripcion">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$nombre = $_POST["nombre"];
		$descripcion = $_POST["Descripcion"];
		$tbl = "productos";
		$inserta="UPDATE $tbl SET nombre= '".$nombre."', Descripcion='".$descripcion."' WHERE idproducto='".$id."' ";
		mysqli_query($conecta,$inserta) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conecta));
		echo "REGISTRO ACTUALIZADO CON EXITO";
		header("Location: tarea1.html");

	}
?>
</div>
</body>
</html>

