<?php
	require 'conexion_MS.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prueba</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
	<div>
		<label for="ID_USER">CONSULTA</label>

		<br />
		<select name="empleado" id="empleado" >
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
					<input type="date" name="fechaDesde" id="fecharDesde">

					<br>
					<br>
					<br>

					<!-- FECHA DE FIN DE CONSULTA-->

					<label form="fechaHasta">Fecha Hastag</label>
					<input type="date" name="fechaHasta" id="fechaHasta">

					<!-- BOTON PARA GENERAR LA CONSULTA-->
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

					<input id="botonEnviar" type="submit" name="botonEnviar">




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
</body>

</html>
<script>
	

$("#botonEnviar").click(function(){
  var users_id   = $('#empleado').val();
	alert(users_id);

  var fechaDesde = $('#fechaDesde').val();
  var fechaHasta = $('#fechaHasta').val();
  var parametros = {                     
	  	          "users_id"   : Userid,
				  "name":    Name,
                "fechadesde" : CheckTime,
                "fechahasta" : CheckTime
                };

    $.ajax({
        data:  parametros, 
        url:   "repxtaquilleropromo.php", 
        type:  "post", 
        success:  function (response) { 
          $("#consulta").html(response); 
        }
    });  
});
</script>