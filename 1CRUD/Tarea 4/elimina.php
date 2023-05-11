<html>

<head>
    <meta charset="utf-8">
    <title>ELIMINAR UN REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles-elimina.css">
</head>

<body>
    <div class="parent-container">
        <div class="form-container">
            <form name="form1" method="POST" action="elimina2.php">
                <table class="table-container">
                    <tr>
                        <td>
                            <p>DIGITE EL CODIGO A ELIMINAR:</p>
                        </td>
                        <td><input type="text" name="no"></td>
                        <td><input type="submit" value="Eliminar"></td>
                        <td><a class="buton" href="borrar.php">Eliminar Datos</a></td>
                    </tr>
                </table>

            </form>


        </div>
        <table class="table-container">
            <thead>
                <tr>
                    <td>Codigo</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                </tr>
            </thead>
            <?php
            include 'conectar.php';
            $con = conecta();
            $query = "SELECT * FROM producto";
            $stmt = $con->prepare($query);
            $stmt->execute();
            while ($mostrar = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $mostrar['idproducto']; ?></td>
                        <td><?php echo $mostrar['nombre']; ?></td>
                        <td><?php echo $mostrar['descripcion']; ?></td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
        <div class="buttons">
            <a class="buton" href="buscar.php">Volver</a>
        </div>
    </div>
</body>

</html>