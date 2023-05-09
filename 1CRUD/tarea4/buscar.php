<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Mysql mediante Funcion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
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
	width:100%;
	display: grid;
	justify-content: center;
    align-items: center;
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


	<table border="1" width="100%">
		<tr>
			<th width="41%">codigo</th>
			<th width="41%">nombre</th>
			<th width="47%">descripcion</th>
		</tr>
		<?php 
			include ('conecta.php');
			$conecta = $conecta;
			$sql = "SELECT * from producto";
			$result = mysqli_query($conecta, $sql);
			while($row = mysqli_fetch_array($result)){
			?>
			<tr>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
</body>
</html>
