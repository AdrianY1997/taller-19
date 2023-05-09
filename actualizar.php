<?php
include ('conexion.php');
$online = conexion();

$id = $_GET ['id'];
$select = "SELECT * FROM productos WHERE id='$id'";
$leer = mysqli_query($online, $select);
$row = mysqli_fetch_array($leer);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar informacion</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form action="actualizar2.php" name="tarea1" method="post">
      <div>
            <input type="hidden" name="id" value="<?= $row ['id']?>" /> <br />
        </div>
        <div>
            <p>Código del producto</p>
            <input type="text" name="codigo" value="<?= $row ['codigo']?>" /> <br />
        </div>
        <div>
            <p>Nombre del producto</p>
            <input type="text" name="nombre" value="<?= $row ['nombre']?>" /> <br />
        </div>
        <div>
            <p>Descripción</p>
            <input type="text" name="descripcion" value="<?= $row ['descripcion']?>">
        </div>
        
        <div>
            <br />
            <input type="submit" class="btn-enviar" value="Actualizar informacion">
          </div>
        <div>
          <br />
          <button class="btn-mostrar"><a href="#"></a>Mostrar</button>
        </div> <br>
      </form>
    </div>    
    </body>
</html>