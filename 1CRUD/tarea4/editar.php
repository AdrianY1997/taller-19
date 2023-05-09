<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include ('conecta.php');
$conecta= $conecta;
$id = $_GET["id"];
echo $id;
$sql = "SELECT * from producto";
$result = mysqli_query($conecta, $sql);
$row = mysqli_fetch_array($result);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row ["nombre_pro"];?>" name="nombre">
	<input type="text" value="<?php echo $row ["descripcion_pro"];?>" name="descripcion">
	<input type="submit" name="submit">
</form>

<?php
	if(isset($_POST["submit"])){
		$nombre = $_POST["nombre"];
		$descripcion = $_POST["descripcion"];
		$tbl = "producto";
		$inserta= " UPDATE $tbl SET nombre_pro = '$nombre', descripcion_pro = '$descripcion' WHERE id = '$id' ";
		mysqli_query($conecta, $inserta) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conecta));
		echo "REGISTRO ACTUALIZADO CON EXITO";
		header("Location: index.html");

	}
?>
</div>
</body>
</html>
