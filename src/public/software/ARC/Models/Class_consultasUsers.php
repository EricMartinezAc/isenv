<?php
require_once ('Class_conexion.php');
	class Class_ConsultasUsers{
		
		public function AuthUsuario($cedula, $psw)
		{
			# code...
			$returnAuth = null;
			$modelConn = new Conexion();
			$conexion = $modelConn->get_conexion();
			$sql = "SELECT * FROM users WHERE cedula = :cedula AND psw = :psw ";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(':cedula',$cedula);
			$statement->bindParam(':psw', $psw);
			$statement->execute();
			if ($result = $statement->fetch()) {
				# code...
				$returnAuth = $result;
			}
			$statement=null;
			return $returnAuth;
		}

		public function validarSession(){
			
			session_start();
			# code...
			if (isset($_SESSION['session'])) {
				# code...
				return true;
			}else {
				# code...
				return false;
			}
		}
		public function cerrarSession(){
			# code...
			if(session_start()){
				session_destroy();
				header ("Location: ../index.html");
			}
		}
	}

?>