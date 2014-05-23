
<!-- background image -->

<div id="background-images" class="background-images">

	<div class="image-1 bg-image">
		<?= Asset::img($restaurant->get_media('background.jpg')->path, array('alt'=>$restaurant->get_media('background.jpg')->alt,
														'class' => "img-responsie bg-image-1"
														))?>

	<?= Asset::img($restaurant->get_media('6.jpg')->path, array('alt'=>$restaurant->get_media('6.jpg')->alt,
														'class' => "img-responsie bg-image-2"
														))?>
	</div>

</div>
<!-- end background imges -->





<nav class="my-nav">
	<ul class="nav-ul">
		<li class="home-button"><?=  Html::anchor('#home', 'Home', array('class' => 'home-button'))?></li>
		<li class="about-button"><?=  Html::anchor('#about', 'About', array('class' => 'about-button'))?></li>
		<li class="menu-button"><?=  Html::anchor('#menu', 'Menu', array('class' => 'menu-button'))?></li>
		<li class="location-button"><?=  Html::anchor('#location', 'Location', array('class' => 'location-button'))?></li>
	</ul>
</nav><!-- end navigation -->




<div class="logo">


	<?= Asset::img($restaurant->get_media('logo.png')->path, array("alt" => $restaurant->get_media('logo.png')->alt,
															'class' => "
																		image-responsive col-lg-8
																						 col-md-6
																						 col-sm-6
																						 col-xs-6 col-xs-offset-2")) ?>
</div>



<section class="home col-lg-12
					 col-md-12
					 col-sm-12
					 col-xs-12 pull-left" id="home">




</section><!-- end home -->



<section class="about col-lg-12
					  col-md-12
					  col-sm-12 pull-left" id="about">

	<div class="div-image pull-left">

		<?= Asset::img($restaurant->get_media('5.jpg')->path, array('alt'=>$restaurant->get_media('5.jpg')->alt,
														'class' => "img-responsive about-image"
														))?>
	</div>
	<div class="col-lg-6 col-lg-offset-1
				col-md-5 col-md-offset-2
				col-sm-8 col-sm-offset-2 about-text text-left">

		<?= $restaurant->get_pageData('about') ?>

	</div>

</section><!-- end about page -->









<section class="menu col-xs-12" id="menu">


	<div class="menu-text col-lg-6 col-lg-offset-1
						  col-md-5 col-md-offset-2
						  col-sm-5 col-sm-offset-2
						  col-xs-12
						  text-center">

		<h3 class="">Our Menus</h3>

		<ul class="" >

			<?php foreach($restaurant->get_menus() as $menu): ?>

				<li>
					<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
				</li>

			<?php endforeach; ?>

		</ul><!-- end menu items -->

	</div><!-- end menu text -->


</section><!-- end menu section -->










<section class="location col-lg-12 col-xs-12" id="location">


	<div class="div-image pull-left">

		<?= Asset::img($restaurant->get_media('7.jpg')->path, array('alt'=>$restaurant->get_media('7.jpg')->alt,
														'class' => "img-responsive about-image"
														))?>
	</div>

	<div class="location-text row col-lg-12 col-lg-offset-">

		<div class="inner-location-text col-lg-3 col-lg-offset-1
										col-md-3 col-md-offset-1
										col-sm-3 col-sm-offset-1
										col-xs-12 text-center">
			<h3>Location</h3>
			<p><?= $restaurant->get_location()->full_address ?></p>
			<?= $restaurant->get_pageData('hours') ?>
		</div>

		<div class="location-map-container  col-lg-7
											col-md-7
											col-sm-7
											col-xs-12">

			<div id="map_canvas" class=""></div>

		</div>

	</div>

</section><!-- end location section -->




<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- google maps init -->
<script type="text/javascript">
	function initialize() {
		//
		/*
		This is the google maps map builder init function.
		this script is resposable for creating the google map embedded on the page.
		the attributes below are requirements for the google map targeted at the
		map_canvas div


		php is dropping long and latitude variables into the google map renderer
		I"m sure there might be a better way to do this maybe we can come up with something better in class?
		I was thinking about mayb using an ajax call here to grab the long and lat, but then i figured this would
		make for faster rendering and we could drop the ajax call?!
		*/

		var myLatlng = new google.maps.LatLng( <?= $restaurant->latitude?> , <?= $restaurant->longitude ?>);

		var mapCanvas = document.getElementById('map_canvas');

		var map_options = {
		center: new google.maps.LatLng(<?= $restaurant->latitude?> , <?= $restaurant->longitude ?>),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(map_canvas, map_options);

		var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: 'Hello World!',
	      // marker was way to big. Photoshop this get a better marker
	      //icon: 'http://localhost:8886/project/public/assets/media/images/pizzajohns/google-maps-marker.png'
	  	});

	  	// map style array
	  	var stylesArray = [
		    {
		        "featureType": "landscape",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 65
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 51
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 30
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road.local",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 40
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.province",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "labels",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "lightness": -25
		            },
		            {
		                "saturation": -100
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#ffff00"
		            },
		            {
		                "lightness": -25
		            },
		            {
		                "saturation": -97
		            }
		        ]
		    }
		]
	  	// end style array
	  	map.setOptions({styles: stylesArray});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- end google maps init -->


