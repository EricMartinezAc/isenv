<?php
require_once ('../Controllers/SQL/session.php');
if ($validadorDeSesion) {
	# code...
	$session = $_SESSION['session'];
?>
<!DOCTYPE html>
<html lang="es">  
<head>    
    	<title>ARCControllers - HOME</title>    
    	<meta charset="UTF-8">
    	<meta name="title" content="arc arcontroller">
    	<meta name="description" content="prototipo001web">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="shortcut icon" href="../Public/fwork/Img/logo/arclogo.ico"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" media="(max-width: 4000px)" type="text/css" href="../Public/fwork/css/style_home.css">
</head>  
<body>
<?php
  include 'Modals/navbarArc_home_submenu.php';
?>
<header>
<nav class="title">
		<img src="../Public/fwork/Img/logo/arclogo.png" alt="logo_arc"/>
	<div class="title_menu">
		<a href="#anuncios">ANUNCIOS</a>
		<a href="#herramientas">HERRAMIENTAS</a>
		<a href="#contactos">CONTACTOS</a>
		<a type="button" class="btn btn-outline-danger" href="../Controllers/SQL/session_destroy.php">SALIR</a>
	</div> 
</nav>
<nav class="navbar-arc">
	<ul>
		<li><a href="#navbarArc_submenu_archivo" data-toggle="modal" data-target="#modal_archivo">ARCHIVO</a></li>
		<li><a href="#navbarArc_submenu_clientes" data-toggle="modal" data-target="#modal_clientes">CLIENTES</a></li>
		<li><a href="#navbarArc_submenu_logistica">LOGISTICA</a></li>
		<li><a href="#navbarArc_submenu_operacion">OPERACIÓN</a></li>
		<li><a href="#navbarArc_submenu_administracion">ADMINISTRACIÓN</a></li>
	</ul> 
</nav>
</header>
<section class="slider">
	<div class="bd-example">
  				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    				<ol class="carousel-indicators">
      				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    				</ol>
    				<div class="carousel-inner">
      				<div class="carousel-item active">
        				<img id="image2" src="../Public/fwork/Img/fondos/fondo_5.jpg" alt="slider_2" class="d-block w-100">
        				<div class="carousel-caption d-none d-md-block">
          					<h5>First slide label</h5>
          					<p>Nulla vitae elit liberjfbfjo, a pharetra augue mollis interdum.</p>
        				</div>
      				</div>
      				<div class="carousel-item">
        				<img id="image3" src="../Public/fwork/Img/fondos/mantein.jpg" alt="slider_3" class="d-block w-100">
        				<div class="carousel-caption d-none d-md-block">
          					<h5>Second slide label</h5>
          					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        				</div>
      				</div>
      				<div class="carousel-item">
        				<img id="image1" src="../Public/fwork/Img/fondos/fondo_2.jpg" alt="slider_1" class="d-block w-100">
        				<div class="carousel-caption d-none d-md-block">
          					<h5>Third slide label</h5>
          					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        				</div>
      				</div>
    				</div>
    				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      					<span class="sr-only">Previous</span>
    				</a>
    				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      					<span class="carousel-control-next-icon" aria-hidden="true"></span>
      					<span class="sr-only">Next</span>
    				</a>
  				</div>
		</div>
</section>
<section class="third">
	<div id="anuncios">
			<h3>ANUNCIOS</h3>
			<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&</p>
	</div>
	<div  id="herramientas">
			<h3>HERRAMIENTAS</h3>
			<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&</p>
	</div>
	<div id="accidentes">
			<h3>CONTACTOS</h3>
			<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&</p>
	</div>
</section>	
<div class="footer">
	<img src="../Public/fwork/Img/logo/arclogo.png" alt="logo_arc"/>
	<p>
	COPYRIGHT © 2019 KreaSoft S.A.S<br> Prohibida su reproducción total o parcial, así como su traducción a cualquier idioma sin autorización escrita de su titular. <br>ARController es un producto de ISE S.A.S. Nit. 9001231212-0.<br> <h4>Aviso de privacidad</h4>
	</p>
	<a>www.ise.com</a>
</div>
	<!-- SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../Public/fwork/js/config_home.js"></script>
  	</body>  
</html>
<?php
}else {
	# code...
	echo "sesion no iniciada";
}
?>