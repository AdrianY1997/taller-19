<?php
function conecta(){
    // Definimos los datos necesarios para la conexión a la base de datos
    $servidor = "localhost"; // Dirección del servidor de la base de datos
    $user = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos
    $bd = "tienda"; // Nombre de la base de datos a la que nos conectaremos

    // Creamos la cadena de conexión usando PDO
    $dsn = "mysql:host=$servidor;dbname=$bd;charset=UTF8";

    try {
        // Intentamos conectarnos a la base de datos usando PDO
        $pdo = new PDO($dsn, $user, $password);

        // Configuramos el modo de errores para que lance excepciones
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Devolvemos la conexión
        return $pdo;
    } catch (PDOException $e) {
        // Si hay un error en la conexión, lo manejamos aquí y detenemos la ejecución
        die("Error al conectar: " . $e->getMessage());
    }
}
?>