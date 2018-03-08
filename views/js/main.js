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

// Contacto 
$('.form-control').focusin(function(){
	if ($(this).val().length > 0) {
		$(this).css({"border": "2px solid #007d75"});
	}
});

$('.form-control').focusout(function(){

	var input = $(this).val().length;

	if (input == 0) {
		$(this).addClass('errorInput');
		$(this).removeClass('successInput');
	}

	if (input > 0) {
		$(this).removeClass('errorInput');
		$(this).addClass('successInput');
	}

	// Validación del formulario
	var validate = $('form').find('.errorInput').length;
	var fullFields = $('form').find('.successInput').length;

	if (validate > 0) {
		$('#submit').prop('disabled', true);
	}

	if (validate == 0 && fullFields == 6) {
		$('#submit').prop('disabled', false);
	}  
});



	// SLIDER
	var options = $('.slideshow options');
	$('.slideshow').slick({
	  centerMode: true,
	  slidesToShow: 5,
	  infinite: false,
	  arrows: true,
	  accesibility: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: true,
	        centerMode: true,
	        slidesToShow: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: true,
	        centerMode: true,
	        slidesToShow: 1
	      }
	    }
	  ]
});






});