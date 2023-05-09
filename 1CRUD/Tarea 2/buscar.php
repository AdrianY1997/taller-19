<?php
include('conectar.php');
$con = conecta();
//Se hace una modificion respecto al codigo del de la tarea 1, aqui se podra hacer la busqueda de los producto mediante el codigo
// Obtener el término de búsqueda del formulario
if (isset($_POST['buscar'])) {
    $buscar = $_POST['buscar'];
    // Consulta SQL para buscar registros que coincidan con el término de búsqueda
    $sql = "SELECT * FROM producto WHERE nombre LIKE :buscar OR descripcion LIKE :buscar";
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':buscar', "%$buscar%", PDO::PARAM_STR);
} else {
    // Preparar la consulta
    $stmt = $con->prepare("SELECT * FROM producto");
}

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
            <h1>Registros</h1>
        </div>
        <div class="table-container">
            <div class="form-container">
                <form method="POST" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar por nombre o descripción" name="buscar">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Buscar</button>
                        </span>
                    </div>
                </form>
            </div>
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
                        <td>
                            <a class="btn btn-primary" href="editar.php?id=<?= $producto->idproducto?>">
                                <i class="fa fa-pencil fa-lg" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <tbody>
                <?php endforeach ?>
        </table>
    </div>
</body>
<script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</html>