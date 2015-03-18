
$(document).ready(function(){

	$('#formularioLogin').closest;


	$('.menujq > ul > li:has(ul)').addClass('desplegable');
	$('.menujq > ul > li > h3').click(function() {
		var comprobar = $(this).next();

		$('.menujq li').removeClass('activa');
		$(this).closest('li').addClass('activa');

		if((comprobar.is('ul')) && (comprobar.is(':visible'))) {
			$(this).closest('li').removeClass('activa');
			comprobar.slideUp('normal');
			$('i',this).removeClass('fa-sort-asc');
			$('i',this).addClass('fa-sort-desc');
		}

		if((comprobar.is('ul')) && (!comprobar.is(':visible'))) {
			$('.menujq ul ul:visible').slideUp('normal');
			comprobar.slideDown('normal');
			$('i',this).removeClass('fa-sort-desc');
			$('i',this).addClass('fa-sort-asc');
		}
	});

	$('#buttonLogin').click(function() {
		var formulario = $('#formularioLogin');

		if(formulario.is(':visible')){
			$('#formularioLogin').slideUp('normal');
		}else{
			$('#formularioLogin').slideDown('normal');
		}
	});





});
