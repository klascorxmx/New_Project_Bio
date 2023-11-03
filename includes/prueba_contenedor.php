<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prueba</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
</head>

<body>
	<div>
		<?php
				require 'conexion_MS.php';
				

				$sqlMs = $conexionMs->prepare("select * from YO_NEW_ASISTENCIA;");
				$sqlMs->execute();
				$resultadosHoras = $sqlMs->fetchall(PDO::FETCH_ASSOC);
				//print_r($resultadosHoras);
				foreach ($resultadosHoras as $row){
					echo $row["nombre"]." ".$row["apellido"].PHP_EOL;
				}
		
		?>
	</div>

	<div>


	</div>
</body>

</html>