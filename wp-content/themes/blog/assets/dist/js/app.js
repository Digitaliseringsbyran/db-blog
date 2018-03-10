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

	    if ($(document).scrollTop() > 400){  
	        $('.footer').addClass('visible');
	    }
	    else{
	       $('.footer').removeClass('visible');
	    }
	});


	$('.post__carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  prevNextButtons: false,
	  pageDots: false
	});


});