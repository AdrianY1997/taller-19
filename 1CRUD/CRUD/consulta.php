<?php
// Se incluye el archivo que contiene la función de conexión a la base de datos
include('conectar.php');

// Se establece la conexión con la base de datos utilizando la función conecta()
$con = conecta();

// Se define la consulta a realizar en la base de datos
$query = "SELECT * FROM producto";

// Se prepara la consulta utilizando el método prepare() del objeto PDO y se guarda en $stmt
$stmt = $con->prepare($query);

// Se ejecuta la consulta utilizando el método execute() del objeto PDOStatement y se guarda en $resultados
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="parent-container">
        <div class="title">
            <h1>Consulta de Productos</h1>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <?php foreach ($resultados as $row) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo "" . $row['idproducto']; ?></td>
                            <td><?php echo "" . $row['nombre']; ?></td>
                            <td><?php echo "" . $row['descripcion']; ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>