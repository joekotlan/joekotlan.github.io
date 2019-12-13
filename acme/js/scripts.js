$(document).ready(function($) {

	// Mobile menu
	$('header button').click(function(){
		$('header, main').toggleClass('open');
	});
	
	// Insights slider
	$('.insights').slick({
		autoplay: true,
		arrows: false,
   	slidesToShow: 3,
   	responsive: [
    		{
      		breakpoint: 787,
      		settings: {
        			arrows: false,
        			infinite: false,
        			dots: true,
        			slidesToShow: 1.2
      		}
    		}
  		]
  	});
	// Events slider
  	$('.events-slider').slick({
		autoplay: true,
		arrows: false,
   	slidesToShow: 3,
   	responsive: [
    		{
      		breakpoint: 787,
      		settings: {
        			arrows: false,
        			infinite: false,
        			dots: true,
        			slidesToShow: 1.2
      		}
    		}
  		]
  	});

});
