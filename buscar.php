<?php
require "conexion.php";
$db = new Database();
$con = $db->conectar();

$nombre = $_GET["nombre"];

$query = "SELECT * FROM producto WHERE nombre LIKE '%$nombre%'";


$stmt = $con->query($query);

// Mostrar los resultados en una tabla
echo '<table class="table">';
echo '<thead><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr></thead>';
echo '<tbody>';
while ($row = $stmt->fetch()) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['nombre'] . '</td>';
  echo '<td>' . $row['descripcion'] . '</td>';
  echo '</tr>';
}
echo '</tbody>';
echo '</table>';

?>