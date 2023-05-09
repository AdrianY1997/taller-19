<?php
include('conectar.php');
$con = conecta();

// Se define la consulta a realizar
$consulta = "SELECT * FROM producto";
// Se ejecuta la consulta en la conexión establecida anteriormente y se obtiene un objeto "PDOStatement"
$stmt = $con->query($consulta);
// Se obtienen todas las filas resultantes de la consulta en un arreglo asociativo mediante el método "fetchAll"
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados como un array de objetos
$productos = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles-buscar.css">
</head>

<body>
    <div class="parent-container">
        <div class="title">
            <h1>Registros </h1>
        </div>
        <table class="table-container">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>idproducto</th>
                </tr>
            </thead>
            <?php foreach ($productos as $producto) : ?>
                <tbody>
                    <tr>
                        <td><?= $producto->nombre ?></td>
                        <td><?= $producto->descripcion ?></td>
                        <td><?= $producto->idproducto?></td>
                    </tr>
                <tbody>
                <?php endforeach ?>
        </table>
    </div>
</body>
<script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</html>