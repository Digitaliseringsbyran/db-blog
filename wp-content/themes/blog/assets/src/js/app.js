jQuery(function($) {

	$.get('/wp-content/themes/blog/assets/dist/icons/sprite.svg', function(data) {
        var div = document.createElement('div');
        div.style.width = 0
        div.style.height = 0
        div.style.opacity = 0
        div.style.position = 'absolute'
        div.style.zIndex = '-999'
        div.setAttribute("aria-hidden", "true")
        div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
        document.body.insertBefore(div, document.body.childNodes[0]);
    });


	$(window).scroll(function() {
	    if ($(document).scrollTop() > 150){  
	        $('.footer').addClass('visible');
	    }
	    else{
	       $('.footer').removeClass('visible');
	    }
	});


	if ( $( ".prototype-icon" ).length ) {
	   var rellax = new Rellax('.rellax');
	}


	window.sr = ScrollReveal();
	sr.reveal('.post, .service, .service-page__step', 
		{ 
			duration: 500,
			scale: 1,
		}
	);


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


	var $people = $('.people__carousel').flickity({
		// options
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
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

	/* PAPI */
	var oldUrl = document.querySelectorAll('.people__img')[2].src;
	document.querySelectorAll('.people__img')[2].addEventListener("mouseover", og);
	document.querySelectorAll('.people__img')[2].addEventListener("mouseleave", papi);

	function papi() {
		console.log(this, "papi")
		this.src = oldUrl;
	}

	function og() {
		console.log(this, "og")
		var newUrl = "https://blogg.xn--digitaliseringsbyrn-ixb.se/wp-content/uploads/2018/03/Papi-chulo.jpg";
		this.src = newUrl;
	}

});