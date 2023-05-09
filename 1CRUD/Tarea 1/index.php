<?php
// Incluye el archivo "conectar.php" que contiene la información necesaria para conectarse a la base de datos.
include 'conectar.php';

// Crea una conexión conectar con la base de datos.
$con = conecta();
?>

<html>

<head>
    <title>conecta</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles-Index.css">
</head>
<!--Header - Menu-->

<body>
    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="..//img/logo.png" alt="">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Obras</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>

                <div class="socialMedia">
                    <a href="#">
                        <img src="../img/social media/facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="..//img/social media/instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="../img/social media/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="../img/social media/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <!--INICIO-->
        <!--Portada de inicio-->
        <div class="container__cover div__offset">
            <div class="cover">
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
                                    <a class="boton" href="buscar.php">MOSTRAR</a>
                                </p>
                                <p class="center-content">
                                    <input type="submit" class="btn btn-green" value="Enviar Datos">
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <section class="image__cover">
                    <img src="../img/img1.png" alt="">
                </section>
            </div>
        </div>
    </main>
</body>

</html>