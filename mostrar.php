<?php
include("conexion2.php");
$consulta = "SELECT * FROM user";
        
$result = mysqli_query($conex,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<link rel='stylesheet' type='text/css' href='index.css'>";
echo "<h1>¡Productos!</h1>";
echo "<table>";
echo "<tr>";
echo "<th><h1>Nombre del producto</th></h1>";
echo "<th><h1>Codigo del producto</th></h1>";
echo "<th><h1>Descripcion</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['nombreproducto']. "</td></h2>";
    echo "<td><h2>" . $colum['idproducto']. "</td></h2>";
    echo "<td><h2>" . $colum['descripcion'] . "</td></h2>";
    echo "<td><a href='eliminar.php?idproducto=" . $colum['idproducto'] . "'>Eliminar</i></a></td>";
    echo "</tr>";
}
echo "</table>";

   //echo "Fuera " ;
   echo'<button type="button" class="boton1"><a href="index.php" style="text-decoration: none; color: white;"> Volver Atrás</a></button';
  
?>