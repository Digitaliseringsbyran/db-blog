jQuery(function($) {
    

	$('.article-slider').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true
	});

	window.sr = ScrollReveal();
	sr.reveal('.post', 
		{ 
			duration: 500,
			scale: 1,
		}
	);

	$(window).scroll(function() {

	    if ($(document).scrollTop() > 150){  
	        $('.footer').addClass('visible');
	    }
	    else{
	       $('.footer').removeClass('visible');
	    }
	});

	var $carousel = $('.post__carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
		wrapAround: true
	});

	$('.post__carousel-previous').on( 'click', function() {
	  $carousel.flickity( 'previous' );
	});

	$('.post__carousel-next').on( 'click', function() {
	  $carousel.flickity( 'next' );
	});


	var $service = $('.service__carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
	});


});