$(function() {
	/*
		AUTHOR : Hugh Ybarra

		this document is in charge of all of the page functionality.
	*/

	/*
	███╗   ██╗ █████╗ ██╗   ██╗██████╗  █████╗ ██████╗
	████╗  ██║██╔══██╗██║   ██║██╔══██╗██╔══██╗██╔══██╗
	██╔██╗ ██║███████║██║   ██║██████╔╝███████║██████╔╝
	██║╚██╗██║██╔══██║╚██╗ ██╔╝██╔══██╗██╔══██║██╔══██╗
	██║ ╚████║██║  ██║ ╚████╔╝ ██████╔╝██║  ██║██║  ██║
	╚═╝  ╚═══╝╚═╝  ╚═╝  ╚═══╝  ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝
	*/

	// get the position of all of the section
	var homePosition 		= $('#home').offset().top;
	var aboutPosition 		= $('#about').offset().top;
	var menuPosition 		= $('#menu').offset().top;
	var locationPosition 	= $('#location').offset().top;

	console.log(homePosition);
	console.log(aboutPosition);
	console.log(menuPosition+'menu position');
	console.log(locationPosition);


	var bg1 	= $('.bg-image-1');
	var bg2	 	= $('.bg-image-2');

	// Check scoll location for image swapping
	$(window).scroll(function(){

		/*
			This if condition will check the current position of the browser. If the browsers position
			is equal to any of the page sections it will change the background -color of the navbar accordingly.
		*/

		currentPosition = $(document).scrollTop();

		// resetting current position to zero if it goes negative
		// this will prevent the current position from going into negative numbers and breaking my nav
		if (currentPosition < 0){
			currentPosition = 0;
		}


		if (currentPosition < aboutPosition){
			console.log('default image');
			bg1.show();
			bg2.hide();

		}

		else if(currentPosition >= aboutPosition && currentPosition < menuPosition){
			console.log('new image');
			bg1.hide();
			bg2.show();

		}

		else if (currentPosition >= menuPosition && currentPosition < locationPosition){
			// unused for template two
		}

		else if (currentPosition >= locationPosition){
			// unused in template two
		}
		// <-- end conditiaonal
	});
	//<!-- end nav bar

		/*
	███╗   ██╗ █████╗ ██╗   ██╗██████╗  █████╗ ██████╗
	████╗  ██║██╔══██╗██║   ██║██╔══██╗██╔══██╗██╔══██╗
	██╔██╗ ██║███████║██║   ██║██████╔╝███████║██████╔╝
	██║╚██╗██║██╔══██║╚██╗ ██╔╝██╔══██╗██╔══██║██╔══██╗
	██║ ╚████║██║  ██║ ╚████╔╝ ██████╔╝██║  ██║██║  ██║
	╚═╝  ╚═══╝╚═╝  ╚═╝  ╚═══╝  ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝
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
		elementPosition= $('#about').offset().top;

		jQuery('html, body').animate({scrollTop:elementPosition}, 'slow');

		event.preventDefault
		return false;
	});

	// menu
	$('.menu-button').click(function(event){
		elementPosition = $('#menu').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');

		event.preventDefault
		return false;
	});

	//location
	$('.location-button').click(function(event){

		elementPosition = $('#location').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');

		window.location.href = '#location';

		event.preventDefault
		return false;
	});// end location click
	// <----- END SCROLLING CLICK FUNCTION
});