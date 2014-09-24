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

	
	$("#imgFile").change(function(){
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			var output = '';
			reader.onload = function (e) {
				output += '<img id="preview" src="#" alt="your image" />';
				$("#uploadedImg").html(output);
				$('#preview').attr('src', e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}

	});



});