$(document).ready(function() {

	// foundation init   
	$(document).foundation();

	// carousel
	$('.carousel').slick({
		swipe: false,
		touchMove: false,
		autoplay: true,
		// dots: true,
		arrows: false,
		speed: 600
	});

	// card flippy
	$(".flip").hover(function(){
		$(this).find(".card").toggleClass("flipped");
		return false;
	});

	document.getElementById("uploadBtn").onchange = function () {
	    document.getElementById("uploadFile").value = this.value;
	};

	

});