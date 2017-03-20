/* Interaccion de Jquery Con Las Funciones Principales */

$(document).ready(function() 
{
	/*Efectos del Parallax*/
	$('.parallax').parallax();

	/* Efecto Collapsible */
	$('.collapsible').collapsible();
    

	$(".dropdown-button").dropdown();

	$('select').material_select();

	$('input#input_text').characterCounter();
        

});