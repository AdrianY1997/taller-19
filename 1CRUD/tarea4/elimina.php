<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
</head>
<body>
    
<form name="form1" method="post" action="elimina.php">
    <table border="1" >
        <tr>
            <td>DIGITE EL CODIGO A ELIMINAR:</td>
            <td><input type="text" class="field" name="no"> <br/></td>
            <td><input type="submit" class="btn btn-green" value="Enviar Datos"></td>
            <td><a href="index.html">salir</a></td><br>
            <td><a href="elimina.php">actualizar pagina</a></td><br>
        </tr><br>
        <tr>
            <td><a href="index.html">salir</a></td><br>
            <td><a href="elimina.php">actualizar pagina</a></td><br>
        </tr>
    </table>
</form>
<table border="1" >
    <tr>
        <td>id</td>
        <td>codigo</td>
        <td>nombre </td>
        <td>descripcion </td>
    </tr>
    <?php 
        include ('conecta.php');
        $conecta= $conecta;
        $registros ="SELECT * FROM producto";
        $result=mysqli_query($conecta,$registros);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>			
        <td><?php echo $mostrar['id']; ?></td>
        <td><?php echo $mostrar['codigo_pro']; ?></td>
        <td><?php echo $mostrar['nombre_pro'];?></td>
        <td><?php echo $mostrar['descripcion_pro'];?></td>
    </tr>
    <?php } ?>

</table>

<?php 
if(isset($_POST['no'])) {
    $conecta = $conecta;
    $no = $_POST['no'];
    $eliminasql="DELETE FROM producto WHERE id = '" . $no . "'";
    mysqli_query($conecta,$eliminasql) or die ("NO SE LOGRA ELIMINAR EL REGISTRO". mysqli_error($conecta));
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
</body>
</html>