// Page transitions
var swup = new Swup({
	plugins: [
		new SwupPreloadPlugin(),
		new SwupScrollPlugin({
			doScrollingRightAway: true
		}),
		new SwupScriptsPlugin(),
		new SwupSlideTheme({
			mainElement: '#slide'
		})
	],
	containers: [
		'#slide',
		'#swup'
	]
});

$(document).ready(function($) {
	init();
});

swup.on('contentReplaced', init);

function init() {

	// If on a mobile device, wait 0.3 seconds after clicking a link with class .btn to allow hover animation to play
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('header nav a, .work > a, .inspiration .head a, .sites a').click(function(e){
		   e.preventDefault();
		   if (this.href) {
		      var target = this.href;
	        	setTimeout(function(){
	         	window.location = target;
	        	}, 300);
			}
		});
		// The animation on the journal page is a big longer so do it again
		$('.posts > a').click(function(e){
		   e.preventDefault();
		   if (this.href) {
		      var target = this.href;
	        	setTimeout(function(){
	         	window.location = target;
	        	}, 600);
			}
		});
	}

	// Add double width class to photos on my work page
	$('.shots > a').each(function(i, obj) {
		var picture = this;
		var alt = $(this).find("img").attr('data-size');
		if(alt == 'double') {
			$(picture).addClass('double');
	   }
	});

	// Scroll Reveal
	// Inspiration 3 blocks
	ScrollReveal().reveal('.design', { origin: 'left', distance: '300%', opacity: '1', viewFactor: 0.5});
	ScrollReveal().reveal('.web-dev', { origin: 'right', distance: '200%', opacity: '1', viewFactor: 0.5});
	ScrollReveal().reveal('article.music', { origin: 'right', distance: '100%', opacity: '1', viewFactor: 0.5});
	// Home Page
	ScrollReveal().reveal('.intro h1, .work h1', { origin: 'left', distance: '100%', opacity: 0});
	ScrollReveal().reveal('.latest h2, .categories ul', { origin: 'bottom', distance: '50px', opacity: 0, viewFactor: 0.75});
	// My Work page
	ScrollReveal().reveal('.work > div *', { origin: 'bottom', distance: '50px', interval: 100});
	// Single Blog Post Page
	ScrollReveal().reveal('.single h1', { origin: 'bottom', distance: '50px'});
	ScrollReveal().reveal('.single p.date', { origin: 'right', distance: '50px'});


	// Function for determining if an element is in the viewport
	var isInViewport = function (elem) {
		var bounding = elem.getBoundingClientRect();
		return (
			bounding.top >= 0 &&
			bounding.left >= 0 &&
			bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	};

	if($('.inspiration-types').length > 0) {
		// Setting svg variables
		var boards = document.querySelector('.boards');
		var sites = document.querySelector('.inspiring-sites svg');
		var design = document.querySelector('.design svg');
		var webdev = document.querySelector('.web-dev svg');
		var music = document.querySelector('.music svg');
		// If the element is in view on page load add active state
		if (isInViewport(boards)) { $('.boards div svg').addClass('active'); }
		if (isInViewport(sites)) { $('.inspiring-sites svg').addClass('active'); }
		if (isInViewport(design)) { $('.design svg').addClass('active'); }
		if (isInViewport(webdev)) { $('.web-dev svg').addClass('active'); }
		if (isInViewport(music)) { $('.music svg').addClass('active'); }
		// On scroll, check if the element is in view
		window.addEventListener('scroll', function (event) {
			if (isInViewport(boards)) { $('.boards div svg').addClass('active'); }
			if (isInViewport(sites)) { $('.inspiring-sites svg').addClass('active'); }
			if (isInViewport(design)) { $('.design svg').addClass('active'); }
			if (isInViewport(webdev)) { $('.web-dev svg').addClass('active'); }
			if (isInViewport(music)) { $('.music svg').addClass('active'); }
		}, false);
	}

	// Fix for 100vh on mobile devices
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', vh + 'px');

	// Pull latest Instagram post for front page
	var instagramDate;
	if($('.latest-instagram').length > 0){	
		var token = '17578247.9ec46f9.f87d4d5fe74540ad8abb4f9e3f13f038',
		   num_photos = 1,
		   container = document.getElementById( 'instagram-image' ),
		   scrElement = document.createElement( 'script' );
		window.result = function( data ) {
			for( x in data.data ){
				container.innerHTML += '<li><a target="_blank" rel="noreferrer" href="' + data.data[x].link + '"><div class="user"><img alt="instagram profile picture" src="' + data.data[x].user.profile_picture + '"/><p class="username">' + data.data[x].user.username + '</p></div><img alt="latest image from joe kotlan\'s instagram" src="' + data.data[x].images.standard_resolution.url + '"></a></li>';
				var t = data.data[x].created_time;
				var myDate = new Date( t *1000);
				instagramDate = myDate.toLocaleString();
				order();
			}
		}
		scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=result' );
		document.body.appendChild( scrElement );
	}

	// Open and close full screen menu
	$('.menu').click(function(){
		$('body').toggleClass('menu-open');
	})

	// Order Instagram, Twitter, Latest Blog, and Latest Website based on publish date for each
	function order() {
		var instagramTime = new Date(instagramDate);
		var twitterTime = new Date($('#twitter-timestamp').html());
		var literatureTime = new Date($('#literature-timestamp').html());
		var workTime = new Date($('#work-timestamp').html());

		var times = [instagramTime, twitterTime, literatureTime, workTime];

		times.sort(function compare(a, b) {
			var dateA = a;
			var dateB = b;
			return dateA - dateB;
		});

		if(instagramTime == times[0]){
			$('.latest-instagram').css('order', '5');
		} else if(instagramTime == times[1]) {
			$('.latest-instagram').css('order', '4');
		} else if(instagramTime == times[2]) {
			$('.latest-instagram').css('order', '3');
		} else if(instagramTime == times[3]) {
			$('.latest-instagram').css('order', '2');
		}
		if(twitterTime == times[0]){
			$('.latest-twitter').css('order', '5');
		} else if(twitterTime == times[1]) {
			$('.latest-twitter').css('order', '4');
		} else if(twitterTime == times[2]) {
			$('.latest-twitter').css('order', '3');
		} else if(twitterTime == times[3]) {
			$('.latest-twitter').css('order', '2');
		}
		if(literatureTime == times[0]){
			$('.latest-literature').css('order', '5');
		} else if(literatureTime == times[1]) {
			$('.latest-literature').css('order', '4');
		} else if(literatureTime == times[2]) {
			$('.latest-literature').css('order', '3');
		} else if(literatureTime == times[3]) {
			$('.latest-literature').css('order', '2');
		}
		if(workTime == times[0]){
			$('.latest-work').css('order', '5');
		} else if(workTime == times[1]) {
			$('.latest-work').css('order', '4');
		} else if(workTime == times[2]) {
			$('.latest-work').css('order', '3');
		} else if(workTime == times[3]) {
			$('.latest-work').css('order', '2');
		}
	}

	// Add horizontal, vertical, and featured classes to images on inspiration boards
	$('.inspiration > a').each(function(i, obj) {
		var picture = this;
		var size = $(this).find("img").attr('data-size');
		if(size == 'horizontal') {
			$(picture).addClass('horizontal');
	   } else if(size == 'vertical'){
	   	$(picture).addClass('vertical');
	   } else if(size == 'featured') {
	   	$(picture).addClass('featured');
	   }
	});

}