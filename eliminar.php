<?php
include("conexion2.php");

if (isset($_POST['confirmar']))
{
    // se ha enviado una solicitud POST para confirmar la eliminación
    $id = $_POST['idproducto'];

    // eliminar el registro de la base de datos
    $sql = "DELETE FROM user WHERE idproducto = '$id'";
    $result = mysqli_query($conex, $sql);

    // volver a cargar la página principal
    header("Location: mostrar.php");
    exit();
}
else
{
    // mostrar la página de confirmación de eliminación
    $id = $_GET['idproducto'];

    echo "<p>¿Está seguro de que desea eliminar este registro?</p>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='idproducto' value='$id'>";
    echo "<input type='submit' name='confirmar' value='Sí'>";
    echo "<a href='mostrar.php'>No</a>";
    echo "</form>";
    
}
?>