<!DOCTYPE html>
<html>
<head>
	<title>producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-O9/iFt8iwXd4tFZf4v5z1OIw8DeCM5S7Q5ti5v5V7Ou8Pbo0V7ZoKnyvASgD2Y36zqG3qyKb95prg9XhBlL8Dg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form method="post">
    	<h1>¡Producto!</h1>
    	<input type="text" name="name" placeholder="Nombre del producto">
		<input type="text" name="id" placeholder="Codigo del producto">
		<input type="text" name="descripcion" placeholder="Descripcion del producto">
    	<input type="submit" name="register">
		<button type="button"  name="mostrar" class="boton"><a href="mostrar.php" style="text-decoration: none; color: white;">Mostrar datos</a></button>
    </form>
        <?php 
        include("conexion2.php");
        ?>
</body>
</html>