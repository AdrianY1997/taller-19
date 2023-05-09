<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>conecta</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <html>

    <head>
        <title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
    </head>

    <body>
        <br>
        <table class="table table-striped table-dark" border="1" width="100%">
	<tr>
		<th width="41%">nombre</th>
		<th width="47%">descripcion</th>
		<th width="12%">idproducto</th>
	</tr>
<?php 
    include("conexion.php");
    $enlace = conectar();
	$sql = "SELECT * from productos";
	$result = mysqli_query($enlace, $sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombre;?></td>
		<td><?php echo $row->Descripcion;?></td>
		<td>
<a class="btn btn-primary" href="editar.php?id=<?php echo $row->idproducto; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true"><?php echo$row->idproducto;?></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
    </body>

    </html>
    