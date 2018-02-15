$(document).ready(function(){
	/* HEADER */
	$('#toggle-menu').on('click',function(){
		$('#menu-links').slideToggle();
	});


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
		$(this).children().toggleClass('faqs-box-active');
		$('.box').parent().children('.answer').removeClass('active');
		$('.box').parent().children('.answer').toggleClass('focus');
		$(this).parent().children('.answer').toggleClass('active');
		$(this).parent().children('.answer').removeClass('focus');

		var answer = $('.box').parent().find('.active');
		if (answer) {
			$('.box').parent().children('.active').slideToggle();
			$('.box').parent().children('.focus').slideUp();
			$('.focus').parent().find('.faqs-box-active').removeClass('faqs-box-active');
		}

	});



	// Slider
	var item = 0;

	function avanzar(){
		// AVANZAR
		if (item == $('#slide ul li').length -1) {
			item = 0;
		} else {
			item++
		}

		movimientoSlide(item);
	}

	function movimientoSlide(item){
		$('#slide ul').animate({'left': item * -100 + '%'}, 1000, "easeOutQuart");
	}



});