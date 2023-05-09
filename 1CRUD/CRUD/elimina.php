
<html>

<body>
    <html>

    <head>
        <title>ELIMINAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS </title>
    </head>

    <body>
        <br>
        <form name="form1" method="post" action="elimina2.php">
            <table border="1">
                <tr>
                    <td>DIGITE EL CODIGO A ELIMINAR:</td>
                    <td><input type="text" class="field" name="no"> <br /></td>
                    <td><input type="submit" class="btn btn-green" value="eliminar"></td>
                </tr>
            </table>
        </form>
        <table border="1">
            <tr>
                <td>codigo</td>
                <td>nombre</td>
                <td>descripcion</td>
            </tr>
            <?php
            include 'conectar.php';
            $con = conecta();
            $query = "SELECT * FROM producto";
            $stmt = $con->prepare($query);
            $stmt->execute();
            while ($mostrar = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['idproducto']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['descripcion']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>

    </html>
</body>

</html>