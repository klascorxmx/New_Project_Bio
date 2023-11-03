<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Registro para intranet de empresas noffra">
	<meta name="keyword" content="password. usuario, contraseña,login,">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>|Registro|</title>
</head>

<body id="index-registro">

	<div class="registro-container">

		<div class="registro-main">
			<h1>REGISTRO</h1>
			<form method="POST" action="guardar.php">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" autofocus="" required="">

				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido" placeholder="Apellido" required="">

				<label for="cedula">Cedula</label>
				<input type="number" name="cedula" id="cedula" placeholder="Cedula de Identidad" required="">

				<!-- <label for="text">Cargo</label>
				<input type="text" name="cargo" id="cargo" placeholder="Ejemplo Analista" required=""> -->

				<label for="correo">Correo</label>
				<input type="email" name="email" id="email" placeholder="@corporacionanubis.com" required="">

				<label for="usuario">Nombre de Usuario</label>
				<input type="text" name="usuario" id="usuario" placeholder="Ejemplo:  juan23" required="">

				<label for="passsword">Password</label>
				<input type="password" name="password" id="passsword" placeholder="Passsword" required="">

				<label for="confirmar">Confirmar</label>
				<input type="password" name="password" id="confirmar" placeholder="Confirmar Passsword" required="">

				<input type="submit" name="guardar" value="GUARDAR">
			</form>


			<a href="../index.php">inicio</a>
		</div>
	</div>

</body>

</html>