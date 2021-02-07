<?php 
	include 'conectar.php';
	session_start();
	$_SESSION['confirmusuario']=$_POST['ConfirmUsuario'];
	$varuser=$_SESSION['confirmusuario'];
	$confirmcontra=$_POST['ConfirmContra'];

	/*conectar a la base de datos*/
	$consulta="SELECT * FROM usuario WHERE user_usuario='$varuser' AND contrasenia_usuario='$confirmcontra'";
	$resultado=mysqli_query($conexion,$consulta);
	$filas=mysqli_fetch_array($resultado);

	if ($filas['rol_usuario']=='Administrador') {
		header("location:inicio.php");
	}
	else if ($filas['rol_usuario']=='Empleado') {
		header("location:ventasempleado.php");
	}
	else{
		echo " 
	<script>
            alert('El Usuario o Contraseña son Incorrectos');
            window.location.assign('index.php');
	</script>
	     ";
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);

 ?>	
