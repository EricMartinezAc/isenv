<?php 
require_once ('../../Models/Class_consultasUsers.php');
$objValidadorDeSesion = new Class_consultasUsers();
$validadorDeSesion = $objValidadorDeSesion->cerrarSession();
header ("Location: ../../index.html");
?>