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




	// SLIDER
	$('.center').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});



});