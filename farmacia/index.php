<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="Contenido/css/style2.css">
	<title>Log-in</title>
</head>
<body>


	<main>
	<div class="contenedor__todo container-fluid">
		<div class="caja__trasera">
			<div class="caja__trasera-register">
				<h3>Ingresa</h3>
				<p>Inicia sesión para formar parte de los servicios de la aplicación</p>
				<button type="submit" class="btn_iniciar-sesion" id="btn_iniciar-sesion">Iniciar Sesión</button>
			</div>
			<div class="caja__trasera-login">
				<h3>Crear Cuenta</h3>
				<p>Crea tu perfil para poder iniciar sesión en la plataforma </p>
				<button type="submit" class="btn_registrarse" id="btn_registrarse">Registrarse</button>
			</div>
		</div>
		<div class="contenedor__login-register">
<!-- LOGIN-->			
			<form action="iniciar.php" class="formulario__login" method="POST">
				<h2>Iniciar Sesión</h2>
				<div class="form-group">
			    <label for="formGroupExampleInput2">Usuario</label>
			    <input type="text" class="form-control col-lg-12" id="ConfirmUsuario" name="ConfirmUsuario">
			  	</div>
			  	<div class="form-group">Contraseña</label>
			    <input type="password" class="form-control col-lg-12" id="ConfirmContra" name="ConfirmContra">
 				 </div>
 				 <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
			</form>

<!-- REGISTRO-->
			<form action="Registros/resgistrar_usuario.php" method="POST" class="formulario__register" onsubmit="return ValidUser();">
				<h2>Crea una Cuenta</h2>
				<div class="form-group">
			    <label for="formGroupExampleInput2">Nombre</label>
			    <input type="text" class="form-control col-lg-12" id="NombreUsuario" name="NombreUsuario">
			  	</div>
			  	<div class="form-group">
			    <label for="formGroupExampleInput2">Cargo</label>
			    <select class="form-control" id="rolUser" name="rolUser">
              <option>...</option>
              <option>Administrador</option>
              <option>Empleado</option>
            </select>
			  	</div>
			  	
			  	<div class="form-group">Usuario</label>
			    <input type="text" class="form-control col-lg-12" id="UsuarioUsuario" name="UsuarioUsuario">
 				 </div>
 				 <div class="form-group">Contraseña</label>
			    <input type="password" class="form-control col-lg-12" id="ContraUsuario" name="ContraUsuario">
 				 </div>
 				 <button type="submit" class="btn btn-primary float-right">Registrarse</button>
			</form>
		</div>
	</div>
</main>	

<script src="Contenido/js/login.js"></script>
</body>
</html>