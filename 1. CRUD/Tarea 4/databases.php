<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="css/style-databases.css">
</head>
<body>
    <div class="container">
        <a class="icon" href="index.html"><i class="fa-solid fa-left-long"></i></a>
        <div class="login">
            <p>Digite el codigo del producto a eliminar</p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" name="ctDataBase">
                <input type="submit" name="submit" value="Eliminar">
            </form>
            <?php
            include('conexion.php');
            $conexion = conectar();
            if (isset($_POST['submit'])) {
                $database = $_POST['ctDataBase'];
                $deletebd = "DROP DATABASE ".$database."";
                if(mysqli_query($conexion, $deletebd)){
                    header("Location: index.html");
                } else {
                    header("Location:".$_SERVER['PHP_SELF']);
                }
            }
            ?>
        </div>
        <table>
            <tr>
                <th>Nombre de la Base de Datos</th>
            </tr>
            <?php
            $sql = "SHOW DATABASES";
            $result = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $mostrar['Database'] ; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</body>
</html>
