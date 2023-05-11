<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Editar Registros </h1>
<br><br>
<?php 
include ('../p1/conecta.php');
$conecta=Conectar();
$id = $_POST['id'];
$sql = "SELECT * FROM productos WHERE idproducto='".$id."'";
$result = mysqli_query($conecta, $sql);
$row = mysqli_fetch_object($result);
?>
<form action="" method="post">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <input type="text" value="<?php echo $row->nomproducto;?>" name="nombre">
    <input type="text" value="<?php echo $row->descripcion;?>" name="descripcion">
    <input type="submit" name="submit">
</form>

<?php
    
    if(isset($_POST['submit'])){
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $inserta="UPDATE productos SET nomproducto= '".$nombre."', descripcion='".$descripcion."' WHERE idproducto='".$id."' ";
        mysqli_query($conecta,$inserta) or die ("No". mysqli_error($conecta));
        echo "<script>alert('Registro actualizado');window.location='../p1/index.php'</script>";
    }
?>
</div>

</body>
</html>