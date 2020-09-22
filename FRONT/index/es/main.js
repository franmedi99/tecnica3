$(document).ready(function(){
	var altura = $('.menu').offset().top;

	$(window).on('scroll', function(){
		if( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed8');
		}else{
			$('.menu').removeClass('menu-fixed8');
		}
	});
});	