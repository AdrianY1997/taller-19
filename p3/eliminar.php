<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="main-wrapper">
<h1>Eliminar Registro </h1>
<br><br>
<?php 
include ('../p1/conecta.php');
$conecta=Conectar();
$id = $_POST['id'];
?>
<form action="" method="post">
	<h4>Esta seguro de eliminar este registro</h4>
	<input type="hidden" value="<?php echo $id;?>" name="id">
    <button type="submit" name="submit">Eliminar</button>

</form>

<?php
	
	if(isset($_POST['submit'])){
		$inserta="DELETE FROM productos WHERE idproducto='".$id."'";
		mysqli_query($conecta,$inserta) or die ("No". mysqli_error($conecta));
		echo "<script>alert('Se elimino el registro');window.location='../p2/buscar.php'</script>";
	}
?>
</div>

</body>
</html>