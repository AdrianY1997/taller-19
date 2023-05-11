<?php
include('conectar.php');
$con = conecta();

if (isset($_POST['nombredb'])) {
    $nombredb = trim($_POST['nombredb']);

    $stmt = $con->prepare("DROP DATABASE {$nombredb}");

    if ($stmt->execute()) {
        echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADA CON EXITO PERDIENDO TODO REGISTRO');window.location='index.html'</script>";
    } else {
        echo "<script>alert('NO SE LOGRA ELIMINAR LA BASE DE DATOS {$nombredb}');</script>";
    }
}
?>

<html>
<head>
<title>ELIMINAR UNA BASE DE DATOS EN EL SGBD</title>
</head>
<body>
    <form name="form1" method="post" action="eliminadb.php">
        <table>
            <tr>
                <td>DIGITE EL NOMBRE DE LA BASE DE DATOS A ELIMINAR:</td>
                <td><input type="text" class="field" name="nombredb" required> <br/></td>
                <td><input type="submit" class="btn btn-green" value="Eliminar DB"></td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <td>BASES DE DATOS EN EL SGBD</td>
        </tr>
        <?php
        $stmt = $con->query("SHOW DATABASES");

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>			
            <td><?php echo $fila['Database'] . "\n";?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>
