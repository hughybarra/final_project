$(function() {
	console.log("init");

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

});