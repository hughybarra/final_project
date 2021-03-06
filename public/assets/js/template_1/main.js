$(function() {

	/*
	AUTHOR : Hugh Ybarra

	this document is in charge of all of the page functionality.
	*/

	/*
	███╗   ███╗ █████╗ ██████╗ ██╗  ██╗██████╗  ██████╗ ██╗    ██╗███╗   ██╗
	████╗ ████║██╔══██╗██╔══██╗██║ ██╔╝██╔══██╗██╔═══██╗██║    ██║████╗  ██║
	██╔████╔██║███████║██████╔╝█████╔╝ ██║  ██║██║   ██║██║ █╗ ██║██╔██╗ ██║
	██║╚██╔╝██║██╔══██║██╔══██╗██╔═██╗ ██║  ██║██║   ██║██║███╗██║██║╚██╗██║
	██║ ╚═╝ ██║██║  ██║██║  ██║██║  ██╗██████╔╝╚██████╔╝╚███╔███╔╝██║ ╚████║
	╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝  ╚═════╝  ╚══╝╚══╝ ╚═╝  ╚═══╝

	 ██████╗██╗      █████╗ ███████╗███████╗███████╗███████╗
	██╔════╝██║     ██╔══██╗██╔════╝██╔════╝██╔════╝██╔════╝
	██║     ██║     ███████║███████╗███████╗█████╗  ███████╗
	██║     ██║     ██╔══██║╚════██║╚════██║██╔══╝  ╚════██║
	╚██████╗███████╗██║  ██║███████║███████║███████╗███████║
	 ╚═════╝╚══════╝╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝╚══════╝
	*/
	// get the viewport width fromt he browser
	var viewportWidth = $(window).width();
	var viewportHeight = $(window).height();

	// set container divs to thee vieport height
	$('.home').height(viewportHeight);

	$('.location').height(viewportHeight);
	// grab image containers and give them widths
	$('.about-container-1').addClass('col-lg-5 col-sm-6 col-lg-offset-1');
	$('.about-container-2').addClass('col-lg-5 col-sm-6');

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
	// <-- END CSS

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

	var homeHeight 			= $('#home').height();
	var aboutHeight 		= $('#about').height();
	var menuHeight 	 		= $('#menu').height();
	var locationHeight			= $('#location').height();

	// grab the nav ul element
	var navUl = $('.nav-ul');
	var phoneText = $('.phone-text');
	// console.log(aboutPosition - aboutHeight/2);


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
			// console.log('home');
			navUl.children().css('background-color', '#ffffff');

		}

		else if(currentPosition >= aboutPosition && currentPosition < menuPosition){
			// console.log('about');
			navUl.children().css('background-color', '#DFE4E6');

		}

		else if (currentPosition >= menuPosition && currentPosition < locationPosition){
			// console.log('menu');
			navUl.children().css('background-color', 'ADADAD');

		}

		else if (currentPosition >= locationPosition){
			// console.log('location');
			navUl.children().css('background-color', '#FFFFFF');

		}
		// <-- end conditiaonal



	})
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
		// console.log('about-button clicked');
		elementPosition= $('#about').offset().top;

		jQuery('html, body').animate({scrollTop:elementPosition}, 'slow');

		event.preventDefault
		return false;
	});

	// menu
	$('.menu-button').click(function(event){
		// console.log('menu-button clicked');
		elementPosition = $('#menu').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');
		event.preventDefault
		return false;
	});

	//location
	$('.location-button').click(function(event){
		// console.log('location-button clicked');

		elementPosition = $('#location').offset().top;

		jQuery('html, body').animate({scrollTop: elementPosition}, 'slow');
		event.preventDefault;
		return false;
	});// end location click
	// <----- END SCROLLING CLICK FUNCTION

	/*
	██╗      █████╗ ██╗   ██╗ ██████╗ ██╗   ██╗████████╗
	██║     ██╔══██╗╚██╗ ██╔╝██╔═══██╗██║   ██║╚══██╔══╝
	██║     ███████║ ╚████╔╝ ██║   ██║██║   ██║   ██║
	██║     ██╔══██║  ╚██╔╝  ██║   ██║██║   ██║   ██║
	███████╗██║  ██║   ██║   ╚██████╔╝╚██████╔╝   ██║
	╚══════╝╚═╝  ╚═╝   ╚═╝    ╚═════╝  ╚═════╝    ╚═╝
	toggle the layout back and forth jquery ajax call
	*/

	$('.layoutToggle').click(function(e){
		console.log('layout toggle clicked');

		var sPageURL = window.location.search.substring(1);
		var url = window.location.href+'/toggle';

		console.log(url);



		$.ajax({
			type: "GET",
			url: url,
			// dataType: 'Json'
			// data: data,
			success: function(success){
				// console.log(success);
				// load the new page
				location.reload( true );
			},
			// dataType: dataType
		});




		event.preventDefault;
		return false;
	});

});