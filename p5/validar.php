<?php 

include('../p1/conecta.php');
$conexion = Conectar();
if(isset($_POST['submit'])){
    if(is_string($nombre = $_POST["user"])){
        if($correo = $_POST["mail"]){
            if(($contrase = $_POST["pass"])){
                $pass = crypt($contrase, PASSWORD_DEFAULT);
                $sentencia = "INSERT INTO usuario (nombre,correo,contra) VALUES ('".$nombre."','".$correo."','".$pass."')";
                mysqli_query($conexion,$sentencia) or die ("No se logra insertar registro". mysqli_error($conexion));
                echo "<script>alert('Usuario registrado');window.location='../p5/ingreso.php'</script>";
            }else{
                echo "Algo";
            }
        }else{
            echo "contra";
        }
    }else{
        echo "email";
    }
}else{
    echo "nombre";
}