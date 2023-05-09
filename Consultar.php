<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
    <link rel="stylesheet" href="Tarea1.css">

</head>
<body>
    <div class="contenedor">
<br>
    <table border="1" >
    <thead>
    <tr>
    <td>N</td>
    <td>codigo</td>
    <td>nombre </td>
    <td>descripcion </td>
    </tr>
    </thead>
<tbody>

<?php 
    include ('conexion.php');
    $conexion =conectar();
    $consulta="SELECT * from producto";
    $execute=mysqli_query($conexion,$consulta) or die();
    while($row=mysqli_fetch_array($execute)){
?>
    <tr>
    <td><?php echo "".$row['id']; ?></td>
    <td><?php echo "".$row['codigo']; ?></td>
    <td><?php echo "".$row['nombre'];?></td>
    <td><?php echo "".$row['describir'];?></td>
    </tr>

<?php 
}
?>

</tbody>
</table>
</body>
</html>
