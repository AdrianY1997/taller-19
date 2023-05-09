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
	<div class="login">
		<div class="header-login">
			<div>
				<a class="volver" href="index.html"><img src="img/1.png" alt=""></a>
			</div>
			<div>
				<ul>
					<li><a href="#">info</a></li>
					<li><a href="#">promociones</a></li>
					<li><a href="#">novedades</a></li>
					<li><a href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="contenedor">
			<h1>Datos Guardados</h1>
			<div class="buscador-container">
				<form action="" method="post">
					<input class="input-buscador" type="text" name="buscar" id="" placeholder="Buscar">
					<button class="btn-buscador">Buscar</button>
				</form>
			</div>
			<div class="table">
				<table>
					<tr class="encabezado">
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
							<a class="boton" href="editar.php?id=<?php echo $row["id"]; ?>"> 
							<i class="fa-solid fa-pencil" style="color: #ffffff;"></i></a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div >
			
		</div>
	</div>
</div>
<div class="futer">
    <p>Elaborado por: Arturo Casteñada</p>
</div>
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
</body>
</html>
