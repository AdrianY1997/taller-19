<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS </title>
</head>
<body>
    <br>
    <form name="form1" method="post" action="eliminadb.php">
        <table border="1" >
            <tr>
                <td>DIGITE EL CODIGO A ELIMINAR:</td>
                <td><input type="text" class="field" name="nombredb"> <br/></td>
                <td><input type="submit" class="btn btn-green" value="Enviar Datos"></td>
            </tr>
        </table>
    </form>
    <table border="1" >
        <tr>
            <td>BASES DE DATOS EN SGBD</td>
        </tr>
        <?php 
            include ('conecta.php');
            $conecta= $conecta;
            $registros ="SHOW DATABASES";
            $result=mysqli_query($conecta,$registros);
            while ($fila = mysqli_fetch_assoc($result)) {
        ?>
        <tr>			
            <td><?php echo $fila['Database'] . "\n";?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>