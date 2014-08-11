$(document).ready(function() {
 	$(document).foundation();

	$('.carousel').slick({
		swipe: false,
		touchMove: false,
		autoplay: true,
		// dots: true,
		arrows: false,
		speed: 600
	});


	$('.temp-show').slick({
	  centerMode: true,
	  autoplay: true,
	  dots: true,
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

	/* card flip */
	$(".flip").hover(function(){
	  $(this).find(".card").toggleClass("flipped");
	  return false;
	});

});

