<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mostrar de productos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Registro actuales </h1>
<br><br>

<?php
     include('../p1/conecta.php');
    $conecta=Conectar();
?>
<table>
	<tr>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Idproducto</th>
	</tr>
<?php 
	$sql = "SELECT * FROM productos";
	$result = mysqli_query($conecta, $sql);
	while($mostrar = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $mostrar->nomproducto;?></td>
		<td><?php echo $mostrar->descripcion;?></td> 
        <td><?php echo$mostrar->idproducto;?></td>
		<td><form action="editar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $mostrar->idproducto; ?>">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
    </button>
</form>
</td>
		<td><form action="../p3/eliminar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $mostrar->idproducto; ?>">
    <button type="submit" class="btn btn-danger">
        <i class="fa-solid fa-trash" aria-hidden="true"></i>
    </button>
</form>
</td>

	</tr>
	<?php } ?>
</table>
<a class="btn btn-danger " href="../p3/vaciar.php">Quieres vaciar los registros</a>
<a class="btn btn-primary" href="../p1/index.php">Inicio</a>
</div>
<script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</body>
</html>
