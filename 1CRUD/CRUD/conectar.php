<?php
function conecta(){
    // Definimos los datos necesarios para la conexión a la base de datos
    $servidor = "localhost"; // Dirección del servidor de la base de datos
    $usuario = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos
    $bd = "tienda"; // Nombre de la base de datos a la que nos conectaremos

    // Creamos la cadena de conexión usando PDO
    $dsn = "mysql:host=$servidor;dbname=$bd;charset=UTF8";

    try {
        // Intentamos conectarnos a la base de datos usando PDO
        $pdo = new PDO($dsn, $usuario, $password);
        

        // Configuramos el modo de errores para que lance excepciones
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Devolvemos la conexión
        return $pdo;
    } catch (PDOException $e) {
        // Si hay un error en la conexión, lo manejamos aquí y detenemos la ejecución
        die("Error al conectar: " . $e->getMessage());
    }
}

// Obtienes la instancia de PDO
$pdo = conecta();

// Realizas las operaciones que necesites

// Cierras la conexión a la base de datos
$pdo = null;

?>