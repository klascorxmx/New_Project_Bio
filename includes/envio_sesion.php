<?php
session_start();
	if (!empty($_POST['enviar'])) {
		if (!empty($_POST['user']) and !empty($_POST['password'])) {

			$user = $_POST['user'];
			$password = $_POST['password'];
			$sql_sesion = $mysqli->query("SELECT * FROM usuario WHERE nom_usuario='$user' and password='$password' ");

			if ($datos = $sql_sesion->fetch_object()) {
				$_SESSION['id']=$datos->id;
				$_SESSION['nombre']=$datos->nombre;
				$_SESSION['apellido']=$datos->apellido;
				header("location: ../Consulta-Bio.php");
			} else {
				echo "error no se puede loguear";
			}
			
		} else {
			echo "Campos Vacios";
		}
		
	}

?>