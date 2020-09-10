$(document).ready(function(){
	// Menu Responsive
	$(".boton-menu i").click(function(e){
		e.preventDefault();
		if($(".boton-menu i").attr('class') == 'fas fa-bars'){
			$(".boton-menu i").removeClass('fas fa-bars').addClass('fas fa-times');
			$(".navegacion nav").animate({left:'0'})
		} else {
			$(".boton-menu i").removeClass('fas fa-times').addClass('fas fa-bars');
			$(".navegacion nav").animate({left:'-100%'})
		}
	});

	// Agregando y Eliminando Clase nav-responsive
	var wd = $(window).width();
	// console.log(wd);
	if(wd <= 700 ){
		$(".navegacion nav").addClass('nav-responsive')
	}else{
		$(".navegacion nav").removeClass('nav-responsive')
	}
			
	$(window).resize(function(){
		var wdi = $(window).width();
		// console.log(wdi)

		if(wdi <= 700 ){
			$(".navegacion nav").addClass('nav-responsive')
		}else{
			$(".navegacion nav").removeClass('nav-responsive')
			$(".navegacion nav").css({'position':''})
		}
	});

	// Menu Fixed
	var navTop = $('.navegacion').offset().top;
	var navHeight = $('.navegacion').height();

	$(window).scroll(function(){
		// console.log($(window).scrollTop());
		if($(window).scrollTop() > navTop){
			$('.navegacion').css({'position':'fixed','top':'0'})
			$('body').css({'padding-top':navHeight})
			$('.nav-responsive').css({'position':'fixed'})
		} else{
			$('.navegacion').css({'position':'','top':''})
			$('body').css({'padding-top':'0'})
			$('.nav-responsive').css({'position':'absolute'})
		}
	});

	//funcionalidad menu cabecera
	$(".menu #btn_home").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'block'});
		$(".operacion").css({'display':'none'});
		$(".admin").css({'display':'none'});
		$(".logistica").css({'display':'none'});
		$(".dbase").css({'display':'none'});
		$(".config").css({'display':'none'});
	});
	
	$(".menu #btn_operacion").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'none'});

		$(".operacion").css({'display':'block'});
		alert("hola");
		$(".admin").css({'display':'none'});
		$(".logistica").css({'display':'none'});
		$(".dbase").css({'display':'none'});
		$(".config").css({'display':'none'});
	});

	$(".menu #btn_admin").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'none'});

		$(".operacion").css({'display':'none'});
		$(".admin").css({'display':'block'});
		$(".logistica").css({'display':'none'});
		$(".dbase").css({'display':'none'});
		$(".config").css({'display':'none'});
	});
	
	$(".menu #btn_logistica").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'none'});

		$(".operacion").css({'display':'none'});
		$(".admin").css({'display':'none'});
		$(".logistica").css({'display':'block'});
		$(".dbase").css({'display':'none'});
		$(".config").css({'display':'none'});
	});

	$(".menu #btn_db").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'none'});

		$(".operacion").css({'display':'none'});
		$(".admin").css({'display':'none'});
		$(".logistica").css({'display':'none'});
		$(".dbase").css({'display':'block'});
		$(".config").css({'display':'none'});
	});
	
	$(".menu #btn_config").click(function(e){
		e.preventDefault();
		$(".main_home").css({'display':'none'});

		$(".operacion").css({'display':'none'});
		$(".admin").css({'display':'none'});
		$(".logistica").css({'display':'none'});
		$(".dbase").css({'display':'none'});
		$(".config").css({'display':'block'});
	});
});