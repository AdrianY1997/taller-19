<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/style-editar.css">
</head>
<body>
<div class="container">
	<div class="main-wrapper">
		<h1>Editar Registros</h1>

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
			<input class="btn" type="submit" name="submit">
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
</body>
</html>
