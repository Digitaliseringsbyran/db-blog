jQuery(function($) {

	window.sr = ScrollReveal();
	sr.reveal('.post, .service', 
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


	// get all containers
	var galleryContainers = $(document).find('.post__img-section');
	
	for ( var i=0; i < galleryContainers.length; i++ ) {
		var currentCarousel = $(galleryContainers[i]).find('.post__carousel');
		var currentCarouselNext = $(galleryContainers[i]).find('.post__carousel-next');
		var currentCarouselPrevious = $(galleryContainers[i]).find('.post__carousel-next');
		console.log(currentCarousel);
		$(currentCarousel).flickity({
			// options
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			pageDots: false,
			wrapAround: true
		});

		$(currentCarouselNext).on( 'click', function() {
			$(currentCarousel).flickity( 'next' );
		});

		$(currentCarouselPrevious).on( 'click', function() {
			$(currentCarousel).flickity( 'previous' );
		});
	}


	var $service = $('.service__carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
	});



});