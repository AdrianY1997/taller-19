<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style-editar.css">
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
		<div class="main-wrapper">
			<h2>Editar Registro:</h2>

			<?php 
				include ('conecta.php');
				$conecta= $conecta;
				$id = $_GET["id"];
				echo "<h1>$id</h1>";
				$sql = "SELECT * from producto";
				$result = mysqli_query($conecta, $sql);
				$row = mysqli_fetch_array($result);
			?>
			<form action="" method="post">
				<h4>Nombre:</h4>
				<input type="text" value="<?php echo $row ["nombre_pro"];?>" name="nombre">
				<h4>Descripción:</h4>
				<input type="text" value="<?php echo $row ["descripcion_pro"];?>" name="descripcion">
				<input class="btn" type="submit" placeholder="Actualizar" name="submit">
				<p class="boton" ><a class="buton" href="buscar.php"> volver </a> </p>
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
	</div>
</div>
</body>
</html>
