<?php 

include '../conectar.php';
date_default_timezone_set('America/Mexico_City');
$fechaUser=date("Y-m-d H:i:s");
$Nombre_Usuario = $_POST['NombreUsuario'];
$Rol_Usuario = $_POST['rolUser'];
$User_Usuario = $_POST['UsuarioUsuario'];
$Contra_Usuario = $_POST['ContraUsuario'];

$insertar = "INSERT INTO usuario( nombre_usuario, rol_usuario, user_usuario, contrasenia_usuario, date_usuario) VALUES ( '$Nombre_Usuario', '$Rol_Usuario', '$User_Usuario','$Contra_Usuario','$fechaUser')";

/*VERIFICACIÓN DE REPETICIONES*/
$verificarUsuario=mysqli_query($conexion,"SELECT * FROM usuario WHERE user_usuario='$User_Usuario'");

if (mysqli_num_rows($verificarUsuario)>0) {
	echo "
		<script>
			alert('Alguien mas se registró con el mismo usuario, intenta con uno diferente');
			window.location='../index.php';
		</script>
	";
	exit();
}



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
            window.location.assign('../index.php');
	</script>
	     ";
}

 ?>