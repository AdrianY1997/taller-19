<?php
// Incluimos el archivo que contiene la función para conectarnos a la base de datos
include('conectar.php');

// Verificamos si se recibió la petición por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores de los campos del formulario enviados por POST
    $idproducto = $_POST["idproducto"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    // Llamamos a la función conecta() para establecer la conexión con la base de datos
    $pdo = conecta();

    // Preparamos la sentencia SQL para insertar un nuevo registro en la tabla "producto"
    $sentencia = "INSERT INTO producto (idproducto, nombre, descripcion) VALUES (:idproducto, :nombre, :descripcion)";
    $stmt = $pdo->prepare($sentencia);

    // Ligamos los parámetros de la sentencia con los valores obtenidos del formulario
    $stmt->bindParam(':idproducto', $idproducto);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);

    // Ejecutamos la sentencia preparada y verificamos si se insertó el registro
    if ($stmt->execute()) {
        // Si se insertó el registro, mostramos un mensaje de éxito
        echo "Registro exitoso.";
        echo "<BR><a href='index.php'><span>VOLVER</span></a>";
    } else {
        // Si no se insertó el registro, mostramos un mensaje de error con la información del error
        echo "Error al insertar el registro: " . $stmt->errorInfo()[2];
    }
} else {
    // Si la petición no es por POST, redireccionamos al usuario a la página anterior
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// Cerramos la conexión con la base de datos
$pdo = null;
?>