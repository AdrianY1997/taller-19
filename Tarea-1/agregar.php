<?php
    include("conexion.php");
    $conexion = $conectar; 
    if(isset($_POST['mostrardatos'])){
        $id_pdt = $_POST['idproducto'];
        $name_pdt = $_POST['nombre'];
        $desc_pdt = $_POST['txtDesProd'];

        $insertarDatos = "INSERT INTO productos(id_producto, name_producto, desc_producto) VALUES ('$id_pdt','$name_pdt','$desc_pdt')";
        mysqli_query($conexion, $insertarDatos) or die ("Error al insertar datos ".mysqli_error($conexion)); 
        echo "Datos Insertados Correctamente"; 
    } else{
    echo "error, no se pueden guardas los datos";
    }

    $id_pdt = ""; 
    $name_pdt = ""; 
    $desc_pdt = ""; 

    header('Location: index.html'); 
?>