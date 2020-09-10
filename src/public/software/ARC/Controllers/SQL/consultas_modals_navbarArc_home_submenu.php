<?php
require_once ('../Models/Class_consultasClientes.php');
$ArrayClientes = null;
# code...
$consulta = new Class_consultasClientes();
$resultado = $consulta->CargarClientes();
if(count($resultado)>0){
	$ArrayClientes = $resultado;
}else{
echo "errorr";
}
?>