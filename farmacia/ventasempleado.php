
<?php 
session_start();
error_reporting(0);
$filas=mysqli_fetch_array($resultado);

$varuser = $_SESSION['confirmusuario'];
if ($varuser == null || $varuser = '' || $filas['rol_usuario']=='Administrador') {
  echo "
    <script>
      alert('Usted no tiene autorización');
      window.location='index.php';
    </script>
  ";
  die();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	hola xdx2
	<a href="cerrar_sesion.php">cerrar sesión</a>
</body>
</html>