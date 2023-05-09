<?php
include('conectar.php');
$con = conecta();

// Si se ha enviado el formulario
if (isset($_POST['guardar'])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $idproducto = $_POST['idproducto'];

    // Preparar la consulta SQL para actualizar el registro
    $stmt = $con->prepare("UPDATE producto SET nombre = :nombre, descripcion = :descripcion WHERE idproducto = :idproducto");

    // Vincular los parámetros
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':idproducto', $idproducto);

    // Ejecutar la consulta SQL
    if ($stmt->execute()) {
        // Si la actualización ha sido exitosa, redirigir a la página principal
        header('Location: index.php');
        exit;
    } else {
        // Si ha habido algún error, mostrar un mensaje de error
        echo "Error al actualizar el registro.";
    }
} else {
    // Si no se ha enviado el formulario, obtener los datos del registro a editar
    $idproducto = $_GET['id'];
    $stmt = $con->prepare("SELECT * FROM producto WHERE idproducto = :idproducto");
    $stmt->bindParam(':idproducto', $idproducto);
    $stmt->execute();
    $producto = $stmt->fetch(PDO::FETCH_OBJ);
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../styles/styles-editar.css">
    <title>Editar </title>
</head>

<body>
    <div class="parent-container">
        <div class="title">
            <h1>Editar Registro </h1>
        </div>
        <div class="table-container">
            <div class="form-container">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $producto->nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"><?= $producto->descripcion ?></textarea>
                    </div>
                    <input type="hidden" name="idproducto" value="<?= $producto->idproducto ?>">
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar cambios</button>
                    <a href="index.php" class="btn btn-default">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>