//variables de contenido
const DOM_index = {
	body : document.getElementById("body"),
	header : document.getElementById("header"),
	section : document.getElementById("section"),
	footer : document.getElementById("footer")
}
const DOM_nav = {
	//dom para nav
	nav : document.getElementById("nav"),
	//dom para menu principal
	nav_mainMenu_fondo : document.getElementById("nav_mainMenu_fondo"),
	nav_mainMenu_imgLogo : document.getElementById("nav_mainMenu_imgLogo"),
	nav_mainMenu_ul : document.getElementById("nav_mainMenu_ul"),
	//dom para botones de slider
	nav_btn_navSlider : document.getElementById("nav_btn_navSlider"),
	nav_btn_navSlider_back : document.getElementById("nav_btn_navSlider_back"),
	nav_btn_navSlider_next : document.getElementById("nav_btn_navSlider_next"),

	//dom para img slider
	imgSlider : document.getElementById("imgSlider"),

	//dom para texto y contenido de slider
	text_navSlider_1 : document.getElementById("text_navSlider_1"),
	img_text_navSlider_1 : document.getElementById("img_text_navSlider_1"),
	text_navSlider_2 : document.getElementById("text_navSlider_2"),
	img_text_navSlider_2 : document.getElementById("img_text_navSlider_2"),
	text_navSlider_3 : document.getElementById("text_navSlider_3"),
	img_text_navSlider_3 : document.getElementById("img_text_navSlider_3")
}
var Obj_imagesSlider = [
	'img/wallp/work.jpg',
	'img/wallp/FB_IMG_15804969712767065.jpg',
	'img/wallp/fondo_2.jpg'
]
var stateSliderNum = 0;

//funciones animejs
function animateImgText_navSlider_2() {
	setInterval(() => {
		anime({
			targets: DOM_nav.img_text_navSlider_2,
			rotate: {
				value: 350,
				duration: 1800,
				easing: 'easeInOutSine'
			  },
		});
	}, 1);
}

// funciones de operación
function cambiarTextoSlider(stateSliderNum) {
	if (stateSliderNum == 0) {
		DOM_nav.text_navSlider_1.style.display = "block";
		DOM_nav.text_navSlider_2.style.display = "none";
		DOM_nav.text_navSlider_3.style.display = "none";
	}
	if (stateSliderNum == 1) {
		DOM_nav.text_navSlider_1.style.display = "none";
		DOM_nav.text_navSlider_2.style.display = "block";
		DOM_nav.text_navSlider_3.style.display = "none";
	}
	if (stateSliderNum == 2) {
		DOM_nav.text_navSlider_1.style.display = "none";
		DOM_nav.text_navSlider_2.style.display = "none";
		DOM_nav.text_navSlider_3.style.display = "block";
	}
}
function nextSlider() {
	var DOM_imgSlider = document.getElementById("imgSlider");
	stateSliderNum++;
	if (stateSliderNum >= Obj_imagesSlider.length) {
		stateSliderNum = 0;
	}
	DOM_nav.imgSlider.src = Obj_imagesSlider[stateSliderNum];
	cambiarTextoSlider(stateSliderNum);
	animateImgText_navSlider_2(stateSliderNum);
}
function backSlider() {
	stateSliderNum--;
	if (stateSliderNum < 0) {
		stateSliderNum = Obj_imagesSlider.length-1;
	}
	DOM_nav.imgSlider.src = Obj_imagesSlider[stateSliderNum];
	cambiarTextoSlider(stateSliderNum);
	animateImgText_navSlider_2(stateSliderNum);
	animateText_navSlider_3();
}
function nextSliderAuto(stateSliderNum){
	setInterval(() => {
		nextSlider()
	}, 6000);
};
//asignamiento funcional
DOM_index.body.setAttribute("onload", "nextSliderAuto(stateSliderNum)");
DOM_nav.nav_btn_navSlider_next.setAttribute("onclick", "nextSlider()");
DOM_nav.nav_btn_navSlider_back.setAttribute("onclick", "backSlider()");




const DOM_section = {
	//dom para section y contenido general
    section : document.getElementById("section"),
    title_section : document.getElementById("title_section"),
    galeria_portfolio_web : document.getElementById("galeria_portfolio_web"),
	galeria_portfolio_web__item : document.getElementById("galeria_portfolio_web__item"),
    icon_arrows_out : document.getElementById("icon-arrows-out"),
    img_galeria_portfolio_web : document.getElementById("img_galeria_portfolio_web")
};

function mostrarIcono() {
    alert("DOM_section.icon_arrows_out.style.display = mostrar");
}

function ocultarIcono() {
    alert("DOM_section.icon_arrows_out.style.display = ");
}

DOM_section.img_galeria_portfolio_web.setAttribute("onclick","mostrarIcono()")


