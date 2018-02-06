$(document).ready(function(){
	/* HEADER */


	$(window).scroll(function(){
		if ($(window).width() < 992) {
			if ($(this).scrollTop() > 0) {
				$('header').addClass('header-active');
			} else {
				$('header').removeClass('header-active');
			}
		} else {
			if ($(this).scrollTop() > 0) {
				$('header').addClass('header-active');
			} else {
				$('header').removeClass('header-active');
			}
		}
	});



	/* FAQS */
	$('.box').on('click', function(){
		$(this).parent().children('.answer').slideToggle();
	});



});