<?php
require_once ('../../Models/Class_consultasUsers.php');
	
$mensaje = null;


if (isset($_POST['cedula']) && isset($_POST['psw']))
 {
	 echo "datos enviados";
	 $cedula = $_POST['cedula'];
	 $psw = $_POST['psw'];
	 if (count($cedula) > 0 && count($psw) > 0  )
	 {
		# code...
		$consultas = new Class_consultasUsers();
		$resultado = $consultas->AuthUsuario($cedula,$psw);
		if(count($resultado)>1){
			session_start();
			$_SESSION['session'] = $resultado[2];
			header ("Location: ../../Views/HOME.php");
		}else{
		echo "Datos incorrectos";
		}
	 }else{
	echo "Debe diligenciar todos los valores";
	}
}else{
	header ("Location: ../../index.php");
}


?>