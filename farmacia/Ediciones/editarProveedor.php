<?php 

include 'conectar.php';
$Numero = $_POST['numeroProv'];
$Nombre_Prov = $_POST['nombreProv'];
$Telefono_Prov = $_POST['telefonoProv'];
$Cuenta_Prov = $_POST['cuentaProv'];
$Vista_Prov = $_POST['vistaProv'];

$actualizar = "UPDATE  proveedores SET nombre_prov='$Nombre_Prov', telefono_prov='$Telefono_Prov', cuenta_prov='$Cuenta_Prov' WHERE cod_prov='$Numero'";


$resultado = mysqli_query($conexion, $actualizar);
if (!$resultado) {
	echo " 
	<script>
            alert('No se ha Actualizado');
            window.history.go(-1);
	</script>
	     ";
}else{

	echo " 
	<script>
            alert('Actualizado con éxito');
            window.location.assign('proveedores.php');
	</script>
	     ";
}

 ?>