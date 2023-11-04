<?php
session_start();
if (empty($_SESSION['id'])) {
	header("location: includes/login.php");
}

require 'includes/conexion_MS.php';

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

<body >
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
		include "includes/nav.php"; //id="contenedor" id="contenedor"
		//class="consulta-box"
		?>

	<div>
		<label for="ID_USER">CONSULTA</label>

		<br />
		<select name="select">
			<option value="0">TODOS LOS REGISTROS</option>


				<?php
				
				$sqlMs = $conexionMs->prepare("SELECT        B.Userid, B.Name from
				dbo.Userinfo AS B  order by B.Name");
				$sqlMs->execute();
				$resultadosHoras = $sqlMs->fetchAll(PDO::FETCH_ASSOC);
				
				foreach ($resultadosHoras as $row) {
					echo '<option value="'.$row["Userid"].'">'.$row["Userid"].' - '.$row["Name"].'</option>';
					
				}	

			
				?>




			
			
		</select>
		<br />
		<br />
		<br />


	</div>

	<div>
					<label form="fechaDesde">Fecha Desde</label>
					<input type="datetime-local" name="fechaDesde" id="fecharDesde">

					<br>
					<br>
					<br>

					<!-- FECHA DE FIN DE CONSULTA-->

					<label form="fechaHasta">Fecha Hasta</label>
					<input type="datetime-local" name="fechaHasta" id="fechaHasta">

					<!-- BOTON PARA GENERAR LA CONSULTA-->
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

					<input id="botonEnviar" , type="submit" name="Consultar">



	</div>
	<div>
		<table>
			<tbody>
				<thead>
					<th>ID Usario</th>
					<th>Nombre Usuario</th>
					<th>Entrada y Salidad</th>
					<th>Empresa</th>
				</thead>
			</tbody>
		</table>

	</div>

		<?php
		//include "includes/footer.php";
		?>
	</div>
</body>

</html>