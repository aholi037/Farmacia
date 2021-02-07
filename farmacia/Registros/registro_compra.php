<?php 

include '../conectar.php';
date_default_timezone_set('America/Mexico_City');
$fechaCompra=date("Y-m-d H:i:s");
$Proveedor=$_POST['proveedorcompra'];
$Cantidad=$_POST['cantidadcompra'];
$Abono=$_POST['abonocompra'];
$Usuario=$_POST['usuariocompra'];

$diferencia=$Cantidad-$Abono;

$insertar = "INSERT INTO compras( proveedor_compra, cantidad_compra, usuario_compra, date_compra, diferencia_compra) VALUES ( '$Proveedor', '$Cantidad', '$Usuario','$fechaCompra','$diferencia')";

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
            alert('Compra Registrada con éxito');
            window.location.assign('registro_compra.php');
	</script>
	     ";
}

 ?>