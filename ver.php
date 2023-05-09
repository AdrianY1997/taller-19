<?php

require "conexion.php";
$db = new Database();
$con = $db->conectar();


$comando = $con->query("SELECT id,codigo,nombre,descripcion FROM producto ORDER BY id ASC ");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<body>
    

<main class="container">
<div class="row">
    <div class="col">
        <h4>TIENDA</h4>
    </div>
    <div class="col">
        <h4><a href="drop.php" class="btn btn-danger">Borrar base de datos</a></h4>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach($resultado AS $row){
                    ?>
                    <tr>
                        <td><?php  echo $row['id'];  ?></td>
                        <td><?php  echo $row['codigo'];  ?></td>
                        <td><?php  echo $row['nombre'];  ?></td>
                        <td><?php  echo $row['descripcion'];  ?></td>
                        <td><a href="editar.php?id=<?php echo $row['id'];?>" class="btn btn-warning" >EDITAR</a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['id'];?>" class="btn btn-danger" >ELIMINAR</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
</body>