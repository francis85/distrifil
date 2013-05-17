$(document).ready(function(){
	
	//Escondemos los submenus cuando el archivo se carga
	$('ul#mainmenu li ul').hide();
	
	
	//Cuando el usuario se coloque encima de un elemento del menu
	$('ul#mainmenu li').hover(
			//Funcion Hover
			function(){
				//Escondemos otros menus
				$('ul#mainmenu li').not($('ul', this)).stop();
	
	
				// Mostramos el menú que corresponde
				$('ul', this).slideDown('fast');
			},
			//OnOut
			function(){
				// Hide Other Menus
				$('ul', this).slideUp('fast');
			}
	);

});

