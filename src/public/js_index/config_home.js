var body = document.body.innerHTML;
alert("welcome to ARController");
var navbarArc_submenu_archivo = document.getElementById('navbarArc_submenu_archivo');
var navbarArc_submenu_clientes = document.getElementById('navbarArc_submenu_clientes');
var navbarArc_submenu_logistica = document.getElementById('navbarArc_submenu_logistica');
var navbarArc_submenu_operacion = document.getElementById('navbarArc_submenu_operacion');
var navbarArc_submenu_administracion = document.getElementById('navbarArc_submenu_administracion');



function Mostrar_navbarArc_submenu_archivo(){
	navbarArc_submenu_archivo.style.display='block';
	navbarArc_submenu_clientes.style.display='none';
	navbarArc_submenu_logistica.style.display='none';
	navbarArc_submenu_operacion.style.display='none';
	navbarArc_submenu_administracion.style.display='none';
}
function Mostrar_navbarArc_submenu_clientes(){
	navbarArc_submenu_archivo.style.display='none';
	navbarArc_submenu_clientes.style.display='block';
	navbarArc_submenu_logistica.style.display='none';
	navbarArc_submenu_operacion.style.display='none';
	navbarArc_submenu_administracion.style.display='none';
}
function Mostrar_navbarArc_submenu_logistica(){
	navbarArc_submenu_archivo.style.display='none';
	navbarArc_submenu_clientes.style.display='none';
	navbarArc_submenu_logistica.style.display='block';
	navbarArc_submenu_operacion.style.display='none';
	navbarArc_submenu_administracion.style.display='none';
}
function Mostrar_navbarArc_submenu_operacion(){
	navbarArc_submenu_archivo.style.display='none';
	navbarArc_submenu_clientes.style.display='none';
	navbarArc_submenu_logistica.style.display='none';
	navbarArc_submenu_operacion.style.display='block';
	navbarArc_submenu_administracion.style.display='none';
}
function Mostrar_navbarArc_submenu_administracion(){
	navbarArc_submenu_archivo.style.display='none';
	navbarArc_submenu_clientes.style.display='none';
	navbarArc_submenu_logistica.style.display='none';
	navbarArc_submenu_operacion.style.display='none';
	navbarArc_submenu_administracion.style.display='block';
}




