<?php 

include '../conectar.php';
date_default_timezone_set('America/Mexico_City');
$fechaProv=date("Y-m-d H:i:s");
$Nombre_Prov = $_POST['nombre_prov'];
$Telefono_Prov = $_POST['telefono_prov'];
$Cuenta_Prov = $_POST['cuenta_prov'];

$insertar = "INSERT INTO proveedores( nombre_prov, telefono_prov, cuenta_prov, date_prov) VALUES ( '$Nombre_Prov', '$Telefono_Prov', '$Cuenta_Prov','$fechaProv')";


$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo " 
	<script>
            alert('No se ha registrado');
            window.history.go(-1);
	</script>
	     ";
}else{

	echo " 
	<script>
            alert('Usuario Registrado con éxito');
            window.location.assign('../proveedores.php');
	</script>
	     ";
}

 ?>