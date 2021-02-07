<?php 
include '../conectar.php';
$Numero = $_POST['numeroProv'];
$Vista='0';

$actualizar = "UPDATE  proveedores SET vista='$Vista' WHERE cod_prov='$Numero'";

$resultado = mysqli_query($conexion, $actualizar);
if (!$resultado) {
	echo " 
	<script>
            alert('No se ha Eliminado');
            window.history.go(-1);
	</script>
	     ";
}else{

	echo " 
	<script>
            alert('Eliminado con éxito');
            window.location.assign('../proveedores.php');
	</script>
	     ";
}


?>