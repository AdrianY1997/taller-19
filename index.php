<?php
include ('conex.php');
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
      <form action="agg.php" name="Tarea1" method="post">
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

   