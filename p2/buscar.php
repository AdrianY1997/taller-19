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
<div class="container">
<h1>Registro actuales </h1>
<br><br>
<div class="d-flex m-3">
        <a class="btn btn-primary m-3" href="../p1/index.php">Inicio</a>
        <form class="m-3" action="<?php $_SERVER["PHP_SELF"]  ?>" method="post">
            <input type="text" name="id">
            <input type="submit" value="Buscar">
			<a class="btn btn-danger " href="../p3/vaciar.php">Quieres vaciar los registros</a>
        </form>
		
    </div>

<?php
     include('../p1/conecta.php');
    $conecta=Conectar();
?>
<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Idproducto</th>
		<th>Editar</th>
		<th>Eliminar</th>
	</tr>
<?php 
	if(isset($_POST['submit']) || !empty($_POST['id'])){
		$id = $_POST["id"];
		$sentencia="SELECT * FROM productos WHERE idproducto='".$id."'";
		$resultado = mysqli_query($conecta, $sentencia);
		while ($most = mysqli_fetch_array($resultado)) {
		?>
		<tr>
			<td><?php echo "" . $most['no']; ?></td>
			<td><?php echo "" . $most['idproducto']; ?></td>
			<td><?php echo "" . $most['nomproducto']; ?></td>
			<td><?php echo "" . $most['descripcion']; ?></td>
		</tr>
	<?php
	}
	}else{$sql = "SELECT * FROM productos";
	$result = mysqli_query($conecta, $sql);
	while($mostrar = mysqli_fetch_object($result)) {
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
	<?php } } ?>
</table>
</div>
<script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</body>
</html>
