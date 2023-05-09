<?php
    include ('conecta.php');
    $conecta = $conecta;
    $nombredb=$_POST["nombredb"];
    $cadena=trim($nombredb);//trim quila los espacios presentes en un acdena de texto 
    if(mysqli_select_db($conecta,$cadena)){
        $eliminardbsql = "DROP DATABASE ".$cadena."";
        mysqli_query($conecta,$eliminardbsql) or die ("NO SE LOGRA ELIMINAR LA BASE DE DATOS".$cadena. mysqli_error($conecta));
        echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADO CON EXITO PERDIO TODO REGISTRO');window.location='index.html'</script>";
        //header("Location: index.html");
    }else{
        echo "<script>alert('LA BASE DE DATOS NO EXISTE');window.location='elimina2db.php'</script>";
        //header('Location:' . getenv('HTTP_REFERER'));
    }
?>
