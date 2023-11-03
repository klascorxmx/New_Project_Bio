<?php
include "conexion.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="login noffran 2000">
	<meta name="keywords" content="login,passsword,nombre,usuario">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>Form Login | Empresas Noffra</title>

</head>

<body id="index-login">
	<div class="login-box">
		<img class="avatar" src="..\img\logo2.png" alt="logo de logo-TIvalencia">
		<h1>Iniciar sesion</h1>
		<?php include "envio_sesion.php"; ?>
		<form method="POST" action="">

			<!--     USERNAME    -->

			<label for="username">Username</label>
			<input type="text" name="user" id="nombre" placeholder="Entrar Username" autofocus>


			<!--     PASSSWORD    -->

			<label for="passsword">Password</label>
			<input type="Password" name="password" placeholder="Entrar Password">

			<!-- boton de enviar -->

			<input type="submit" name="enviar" value="Iniciar Sesion">

			<a href="registro.php">Registrarse |</a>

			<a href="#Password recovery">Perdio su Contraseña?</a>
		</form>
	</div>
</body>

</html>