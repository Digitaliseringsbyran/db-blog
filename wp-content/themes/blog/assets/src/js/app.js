jQuery(function($) {

	window.sr = ScrollReveal();
	sr.reveal('.post, .service, .service-page__step', 
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



	var waypoints = $('.service-page__line').waypoint({
	  handler: function(direction) {
	    $('.service-page__line').addClass('active');
	  }
	})

	var carousels = $('.post__img-section').has('.post__carousel');

	$(carousels).each( function( i, container )  {
		var carouselContainer = $(container).find('.post__carousel');
		var next = $(container).find('.post__carousel-next');
		var prev = $(container).find('.post__carousel-previous');

		var carousel = $(carouselContainer).flickity({
			// options
			cellAlign: 'left',
			contain: true,
			prevNextButtons: false,
			pageDots: false,
			wrapAround: true
		});

		$(next).on('click', function() {
			carousel.flickity( 'next' );
		});

		$(prev).on('click', function() {
			carousel.flickity( 'previous' );
		});
	});

	var $service = $('.service__carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
	});

	// Add active to first element
	$($service.data().flickity.cells[0].element).addClass('active');

	$service.on('settle.flickity', function() {
		var data = $service.data().flickity;
		var slides = data.cells;
		var index = data.selectedIndex;

		console.log(data.cells);

		for (var i = 0; i < data.cells.length; i++) {
			i <= index ? 
				$(slides[i].element).addClass('active') : 
				$(slides[i].element).removeClass('active')
		}
	})



});