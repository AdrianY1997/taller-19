<html>

<head>
    <title>Regstro BD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Registro en la Base de Datos</h1>
    <div class="container">  
        <table border="1" class="table table-primary table-striped-columns text-center w-50">
        <thead>
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                include('conecta.php');
                $conecta = conecta();
                $sql = "SELECT * from productos";
                $result = mysqli_query($conecta, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo "" . $mostrar['id']; ?></td>
                <td><?php echo "" . $mostrar['codigo']; ?></td>
                <td><?php echo "" . $mostrar['name_product']; ?></td>
                <td><?php echo "" . $mostrar['description']; ?></td>
            </tr>
            <?php
                }
                ?>
        </tbody>
        </table>
    </div>
</body>

</html>