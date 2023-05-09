
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conecta</title>
    <link rel="stylesheet" href="style.css">
</head>
    <div class="formulario">
        <form name="form1" method="POST" action="agregar.php">
                <p>CODIGO DEL PRODUCTO:</p>
            <input type="number" class="field" name="idproducto"> <br/>
                <p>NOMBRE DEL PRODUCTO:</p>
            <input type="text" class="field" name="nombre"> <br/>
                <p>DESCRIPCION</p>
                <textarea name="txtDesProd"></textarea>
                <p class="center-content">
            <input type="submit" name="mostrardatos" class="boton" value="Enviar Datos">
                <br><br>
            <button class="btn-enviar"><a href="tabla.php">Mostrar</a></button>
        </form>
    </div>
</body>
</html>

