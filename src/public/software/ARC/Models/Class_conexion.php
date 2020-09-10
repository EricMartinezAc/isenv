<?php
	class Conexion {
		public function get_conexion() {
			$user = "root";
			$pass = "";
			$host = "localhost";
			$db = "rouse_db";
			
			$conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			return $conexion;
		}
	}

?>