<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-buscar.css">
</head>
<body>
<body>

<div class="container">
    <div class="login">
        <div class="header-login">
            <div>
                <a class="volver" href="index.html"><img src="img/1.png" alt=""></a>
            </div>
            <div>
                <ul>
                    <li><a href="#">info</a></li>
                    <li><a href="#">promociones</a></li>
                    <li><a href="#">novedades</a></li>
                    <li><a href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="cuerpo-container">
            <div class="contenedor">
                <h1>Datos Guardados</h1>
                <div class="buscador-container">
                    <form action="" method="post">
                        <input class="input-buscador" type="text" name="buscar" id="" placeholder="Buscar">
                        <button class="btn-buscador">Buscar</button>
                    </form>
                </div>
                <table>
                    <tr class="encabezado">
                        <td>#</td>
                        <td>codigo</td>
                        <td>nombre </td>
                        <td>descripcion </td> 
                    </tr>
                    <?php 
                        include ('conecta.php');
                        $conecta= $conecta;
                        $sql="SELECT * from producto";
                        $result=mysqli_query($conecta,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar["id"]; ?></td>
                        <td><?php echo $mostrar["codigo_pro"]; ?></td>
                        <td><?php echo $mostrar["nombre_pro"];?></td>
                        <td><?php echo $mostrar["descripcion_pro"];?></td>
                    </tr>
                    <?php }  mysqli_free_result($result); ?>
                </table>
            </div> 
        </div>
         
    </div>
</div>
<div class="futer">
    <p>Elaborado por: Arturo Casteñada</p>
</div>
</body>
</html>