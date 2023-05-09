<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container">
    <div class="d-flex m-3">
        <a class="btn btn-primary m-3" href="../p1/index.php">Inicio</a>
        <form class="m-3" action="<?php $_SERVER["PHP_SELF"]  ?>" method="post">
            <input type="text" name="id">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <table class="table table-hover">
        <tr>
            <td>N</td>
            <td>Codigo</td>
            <td>Nombre </td>
            <td>Descripcion </td>
        </tr>
        <?php
        include('conecta.php');
        $conecta = Conectar();
 
        ?>
        <?php 
            if(isset($_POST['submit']) || !empty($_POST['id'])){
                $id = $_POST["id"];
                $sentencia="SELECT * FROM productos WHERE idproducto='".$id."'";
                $resultado = mysqli_query($conecta, $sentencia);
                while ($most = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td><?php echo "" . $most['no']; ?></td>
                    <td><?php echo "" . $most['idproducto']; ?></td>
                    <td><?php echo "" . $most['nomproducto']; ?></td>
                    <td><?php echo "" . $most['descripcion']; ?></td>
                </tr>
            <?php
            }
        }else{
            $sql = "SELECT * from productos ORDER BY no DESC";
            $result = mysqli_query($conecta, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo "" . $mostrar['no']; ?></td>
                    <td><?php echo "" . $mostrar['idproducto']; ?></td>
                    <td><?php echo "" . $mostrar['nomproducto']; ?></td>
                    <td><?php echo "" . $mostrar['descripcion']; ?></td>
                </tr>
            <?php
            }
        }
        ?>
    </table>
</body>
</html>