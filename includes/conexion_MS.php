<?php
	/*
	CONEXION PARA DB OFIC_BIO DONDE ESTAN LOS REGISTROS DE EMPLEADOS, REGISTRADOS POR EL BIOMETRICO*/
$conexionMs = new PDO("sqlsrv:server=VAL-SIS-SOPORTE;database=OFIC_BIO;TrustServerCertificate=true","sa","xms5580*");
















	/*class Cconexion
	{
		
		public static function ConexionDB()
		{
			$host = 'VAL-SIS-SOPORTE';
			$dbname = 'OFIC_BIO';
			$username = 'sa';
			$password = 'xms5580*';
			/*$port = 1433;
			$ssl=1;

			try {
				$conect = new PDO("sqlsrv:Server=$host;Database=$dbname;TrustServerCertificate=$ssl",$username,$password);

				echo "SE LOGRO LA CONEXION";

			} catch (PDOException $exp) {
				echo "NO SE LOGRO LA CONEXION CON LA DATABASE : $dbname, error: $exp";
				
			}
			return $conect;
		}
	}*/

	

	/*$serverName = "VAL-SIS-SOPORTE";
    $connectionInfo = array( "Database"=>"OFIC_BIO", "UID"=>"sa","PWD"=>"xms5580*");
    $connection = sqlsrv_connect( $serverName, $connectionInfo);

    if( !$connection ) {
    die(print_r( sqlsrv_errors(), true));
    }*/


?>