<?php
include ('../p1/conecta.php');
$conecta=Conectar();
$nombredb=$_POST['nombredb'];
$cadena=trim($nombredb);
	if("Tienda" == $cadena){
		if(mysqli_select_db($conecta,$cadena)){
			$eliminardbsql = "DROP DATABASE $cadena";
			mysqli_query($conecta,$eliminardbsql) or die ("NO SE LOGRA ELIMINAR LA BASE DE DATOS".$cadena. mysqli_error($conecta));
			echo "<script>alert('LA BASE DE DATOS EXISTE Y FUE ELIMINADO CON EXITO PERDIO TODO REGISTRO');window.location='../p1/index.php'</script>";
			}else{
				echo "<script>alert('LA BASE DE DATOS NO EXISTE');window.location='eliminabd.php'</script>";
			}
	}else{
			echo "<script>alert('No tienes permitido eliminar esta base de datos : $cadena');window.location='../p4/eliminabd.php'</script>";
		}
	

?>
