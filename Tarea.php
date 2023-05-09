<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conecta</title>
    <link rel="stylesheet" href="Tarea1.css">
</head>
<body>
    <div class="formulario">
    <form name="form1" method="POST" action="agregar.php">
    <p>CODIGO DEL PRODUCTO:</p>
    <input type="text" class="field" name="idproducto"> <br/>
    <p>NOMBRE DEL PRODUCTO:</p>
    <input type="text" class="field"name="nombre"> <br/>
    <p>DESCRIPCION</p>
    <input type ="text" class="field" name="descripcion" ></input><br/>
    <p class="center-content">
    <input type="submit" class="btn btn-green" value="Enviar Datos">
</p>
<p>
<br>
    <a class="boton" href="Consultar.php">MOSTRAR</a>
</p>
</form>
</div>
</body>
</html>
