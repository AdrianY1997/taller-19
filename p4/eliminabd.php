<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar base de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
        <br>
        <form name="form1" method="post" action="elimina2bd.php">
            <table class="table table-responsive table-borderless">
                <tr>
                    <td>Escriba el nombre de la base de datos a eliminar</td>
                    <td><input type="text" class="field" name="nombredb"> <br /></td>
                    <td><input type="submit" class="btn btn-danger" value="Enviar Datos"></td>
                    <td><input type="submit" class="btn btn-primary m-3" href="../p1/index.php"></td>
                </tr>
            </table>
        </form>
        <table class="table table-responsive table-borderless">
            <tr>
                <td>BASES DE DATOS EN SGBD</td>
            </tr>
            <?php
            include('../p1/conecta.php');
            $conecta = Conectar();
            $registros = "SHOW DATABASES";
            $result = mysqli_query($conecta, $registros);
            while ($fila = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $fila['Database'] . "\n"; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>

    </html>