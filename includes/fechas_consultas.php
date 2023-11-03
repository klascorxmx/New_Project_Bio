
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registros de Biometrico</title>
</head>
<body >
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Empleado</th>
				<th>Hora</th>
				<th>Oficina</th>
			</tr>
		</thead>
		<?php

require 'conexion_MS.php';

$sqlMs = $conexionMs->prepare("select * from YO_NEW_ASISTENCIA;");
$sqlMs->execute();
$resultadosHoras = $sqlMs->fetchall(PDO::FETCH_ASSOC);

?>
		
	</table>
</body>
</html>