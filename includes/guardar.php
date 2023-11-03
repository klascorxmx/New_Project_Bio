<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['email'];
$nom_usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO usuario (nombre, apellido, cedula, correo, nom_usuario, password) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$nom_usuario', '$password')";

$resultado= $mysqli->query($sql);

if ($resultado) {
	header("location: registro_exitoso.php");
}else{
	echo "error";
}



?>