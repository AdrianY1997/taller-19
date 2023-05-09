<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Mysql mediante Funcion</title>
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style-buscar.css">
</head>
<body>
<div class="container">
	<div class="contenedor">
	<h1>Editar Registros con Función PHP </h1>

	<table class="table">
		<tr class="header">
			<th width="10%">idproducto</th>
			<th width="25%">codigo</th>
			<th width="30%">nombre</th>
			<th width="50%">descripcion</th>
		</tr>
		<?php 
			include ('conecta.php');
			$conecta = $conecta;
			$sql = "SELECT * from producto";
			$result = mysqli_query($conecta, $sql);
			while($row = mysqli_fetch_array($result)){
			?>
			<tr>
				<td> <?php echo $row ["id"];?> </td>
				<td><?php echo $row ["codigo_pro"]; ?></td>
				<td><?php echo $row ["nombre_pro"]; ?></td>
				<td><?php echo $row ["descripcion_pro"]; ?></td>
				<td>
					<a class="btn btn-primary" href="editar.php?id=<?php echo $row["id"]; ?>"> 
					<i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
					
				</td>
				<td>
					<a class="btn btn-primary" href="elimina.php"> <i class="fa-sharp fa-solid fa-trash-can"></i></a>
					
				</td>
			</tr>
		<?php } ?>
	</table>
	</div>
	
</div>

<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
</body>
</html>
