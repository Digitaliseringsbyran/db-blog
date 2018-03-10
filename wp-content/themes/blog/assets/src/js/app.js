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


	$('.post__carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  prevNextButtons: false,
	  pageDots: false
	});


});