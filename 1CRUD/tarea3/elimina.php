<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/2619cec24c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-elimina.css">
</head>
<body>
<div class="container">
    <div class="contenedor"> 
        <form name="form1" method="post" action="elimina.php">
            <table class="tabla">
                <tr>
                    <td>DIGITE EL ID A ELIMINAR:</td>
                    <td><input type="text" class="field" name="no"> <br/></td>
                    <td><input type="submit" class="btn" value="Enviar Datos"></td>  
                </tr>
                <tr>
                    <td><p class="exit"><a class="boton" href="index.html">salir</a></p></td>
                    <td><p class="update-pag"><a class="boton" href="elimina.php">actualizar pagina</a></p></td>
                </tr>
            </table>
        </form>

        <table class="table">
            <tr class="header">
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
    </div>
    
</div>    


<?php 
if(isset($_POST['no'])) {
    $conecta = $conecta;
    $no = $_POST['no'];
    $eliminasql="DELETE FROM producto WHERE id = '" . $no . "'";
    mysqli_query($conecta,$eliminasql) or die ("NO SE LOGRA ELIMINAR EL REGISTRO". mysqli_error($conecta));
}
?>


</body>
</html>