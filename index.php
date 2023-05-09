<?php
include ('conexion.php');
$online = conexion();

$select = "SELECT * FROM productos";
$leer = mysqli_query($online, $select);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  
  <body>

  
    <div class="container">
      <form action="agregar.php" name="tarea1" method="post">
        <div>
            <p>Código del producto</p>
            <input type="number" name="codigo"/> 
        </div>
        <div>
            <p>Nombre del producto</p>
            <input type="text" name="nombre"/> 
        </div>
        <div>
            <p>Descripción</p>
            <input type="text" name="descripcion"/> 
        </div>
        
        <div>
            <br />
            <input type="submit" class="btn-enviar" value="Enviar Datos">
          </div>
        <div>
          <br />
          <button class="btn-mostrar"><a href="#"></a>Mostrar</button>
        </div> <br>
      </form>
    </div>

    <!-- Tabla que va a mostrar los datos -->

  <div> <br><br><br><br>
    <h1>Productos registrados</h1>
    <table>
      <thead>
        <tr>

        <th>Id</th>
        <th>Códido del producto</th>
        <th>Nombre deL Producto</th>
        <th>Descripción del Producto</th>

        </tr>
      </thead>
      <tbody> 
        <?php 
          while($row = mysqli_fetch_array($leer)):
        ?>
        <tr>
        <th><?= $row ['id']?></th>
        <th><?= $row ['codigo']?></th>
        <th><?= $row ['nombre']?></th>
        <th><?= $row ['descripcion']?></th>

        <th> <a href="actualizar.php?id=<?= $row ['id']?>">Editar </a></th>
        <th> <a href="eliminar.php?id=<?= $row ['id']?>">Eliminar </a></th>
        </tr>
        <?php 
          endwhile;
        ?>
      </tbody>
    </table>
  </div>
  </body>
</html>