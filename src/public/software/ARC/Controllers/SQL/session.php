<?php
require_once ('../Models/Class_consultasUsers.php');
$objValidadorDeSesion = new Class_consultasUsers();
$validadorDeSesion = $objValidadorDeSesion->validarSession();
?>