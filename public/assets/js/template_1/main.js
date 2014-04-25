$(function() {

	// get the scroll position of the document
	var scrollPosition = $(document).scrollTop();

	// console.log(scrollPosition);
	// get the viewport width fromt he browser
	var viewportWidth = $(window).width();
	var viewportHeight = $(window).height();

	console.log(viewportHeight);

	// set container divs to thee vieport height
	$('.home').height(viewportHeight);

	$('.about').height(viewportHeight);

	$('.menu').height(viewportHeight);

	$('.location').height(viewportHeight);




	// grab image containers and give them widths
	$('.about-container-1').addClass('col-lg-5 col-lg-offset-1');
	$('.about-container-2').addClass('col-lg-5');
	// add class to images
	$('.about-image-1').addClass('img-responsive img-rounded');
	$('.about-image-2').addClass('img-responsive img-rounded');

	// Markdown does not have proper wrapper
	// wrap the text in a wrapper
	// add row to container
	$('.about-text-container').addClass('row col-lg-12 pull-left');
	// add size to h4
	$('.about-h3').addClass('col-lg-2 text-center col-lg-offset-1');
	// add size to about p tags
	$('.about-text-1').addClass('col-lg-4');
	$('.about-text-2').addClass('col-lg-4');

	// Menus
	$('ul.menu-items > li').addClass('col-lg-4');


	/*
	 ██████╗██╗     ██╗ ██████╗██╗  ██╗
	██╔════╝██║     ██║██╔════╝██║ ██╔╝
	██║     ██║     ██║██║     █████╔╝
	██║     ██║     ██║██║     ██╔═██╗
	╚██████╗███████╗██║╚██████╗██║  ██╗
	 ╚═════╝╚══════╝╚═╝ ╚═════╝╚═╝  ╚═╝
	*/
	// declaring vars
	var myPosition = '';

	/*
	The follwing click functions are for click scrolling. When the user clicks on a nav link
	they will scroll to the position of the element as it sits on the page.
	*/
	// home
	$('.home-button').click(function(event){
		console.log('home-button clicked');

		// grab the pixle position of an element offset from the top of the document.
		elementPosition = $('#home').offset().top;
		// when clicked have the page animate to the above pixle position
		jQuery('html, body').animate({scrollTop:elementPosition}, 'slow');

		// prevent default link behavior
		event.preventDefault
		return false;
	});

	// about
	$('.about-button').click(function(event){
		console.log('about-button clicked');
		elementPosition= $('#about').offset().top;

		jQuery('html, body').animate({scrollTop:elementPosition}, 'slow');

		event.preventDefault
		return false;
	});

	// menu
	$('.menu-button').click(function(event){
		console.log('menu-button clicked');
		elementPosition = $('#menu').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');
		event.preventDefault
		return false;
	});

	//location
	$('.location-button').click(function(event){
		console.log('location-button clicked');

		elementPosition = $('#location').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');
		event.preventDefault
		return false;
	});// end location click
	// <----- END SCROLLING CLICK FUNCTION

});