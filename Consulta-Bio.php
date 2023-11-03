<?php
session_start();
if (empty($_SESSION['id'])) {
	header("location: includes/login.php");
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="empresa noffra pagina de intrenet para los empleados">
	<meta name="keywords" content="manueles,noffra,anubis,harfon,aoe">
	<meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0,maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<title>Consulta Biometrico | Empresas Noffra</title>
</head>

<body id="index">
	<div class="usuario-box">

		<h2>Usuario: <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'];  ?> </h2>

	</div>
	<div class="usuario-box">
		<a href="includes/cerrar_sesion.php">Cerrar Sesion</a>
	</div>
	<div >
		<?php
		include "includes/header.php";
		/**include"includes/slider.php";**/
		//include "includes/nav.php"; //id="contenedor" id="contenedor"
		//class="consulta-box"
		?>

		<div >


			<div >
				<h1>CONSULTA ASISTENCIA DE EMPLEADOS</h1>
				<br>
				<div>
					<select name="select">
						
						
					
						<option value="value1" >TODOS LOS REGISTROS</option>
						<?php

							require 'conexion_MS.php';

							$sqlMs = $conexionMs->prepare("select * from YO_NEW_ASISTENCIA;");
							$sqlMs->execute();
							$resultadosHoras = $sqlMs->fetchall(PDO::FETCH_ASSOC);
							while ($resultadosHoras = $sqlMs->fetchall(PDO::FETCH_ASSOC)) {
								echo '<option value='.$resultadosHoras[0].'>'.$resultadosHoras[1].' - '.$resultadosHoras[3].'</option>';
							  }

						?>
						<option value="value2" >EMPLEADOS</option>
						<option value="value3"></option>
							
					</select>
					
				</div>
				
				<br>
				<br>
				<form method="POST" action="includes/fechas_consultas.php">
					<!-- FECHA DE INICIO DE CONSULTA-->

					<label form="fecha inicio">Desde</label>
					<input type="datetime-local" name="fecha_inicio">

					<br>
					<br>
					<br>

					<!-- FECHA DE FIN DE CONSULTA-->

					<label form="fecha fin">Hasta</label>
					<input type="datetime-local" name="fecha_fin">

					<!-- BOTON PARA GENERAR LA CONSULTA-->
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

					<input id="boton-enviar" , type="submit" name="Consultar">




				</form>

			</div>
		</div>

		<?php
		//include "includes/footer.php";
		?>
	</div>
</body>

</html>