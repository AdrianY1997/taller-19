<?php
// Incluye el archivo "conectar.php" que contiene la información necesaria para conectarse a la base de datos.
include 'conectar.php';

// Crea una conexión conectar con la base de datos.
$con = conecta();
?>

<html>

<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles-Index.css">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form name="form1" method="POST" action="agregar.php">
                <div class="product">
                    <p>CODIGO DEL PRODUCTO:</p>
                    <input type="number" class="field" name="idproducto">
                </div>
                <div class="product">
                    <p>NOMBRE DEL PRODUCTO:</p>
                    <input type="text" class="field" name="nombre">
                </div>
                <div class="product">
                    <p>DESCRIPCION</p>
                    <input type="text" class="field" name="descripcion"></input>
                </div>
                <div class="buttons">
                    <p>
                        <a class="boton" href="buscar.php">Mostrar</a>
                    </p>
                    <p class="center-content">
                        <input type="submit" class="btn btn-green" value="Enviar Datos">
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>