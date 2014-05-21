<nav class="my-nav">
	<ul class="nav-ul">
		<li class="home-button"><?=  Html::anchor('#home', 'Home', array('class' => 'home-button'))?></li>
		<li class="about-button"><?=  Html::anchor('#about', 'About', array('class' => 'about-button'))?></li>
		<li class="menu-button"><?=  Html::anchor('#menu', 'Menu', array('class' => 'menu-button'))?></li>
		<li class="location-button"><?=  Html::anchor('#location', 'Location', array('class' => 'location-button'))?></li>
	</ul>
</nav><!-- end navigation -->




<div id="background-image">
	<?= Asset::img($restaurant->get_media('background.jpg')->path, array('alt'=>$restaurant->get_media('1.jpg')->alt,
													'class' => ""
													))?>
</div>
<section class="home col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left" id="home">


	<div class="logo
				col-xs-12
				col-sm-7 col-sm-offset-3
				col-md-6 col-md-offset-3
				col-lg-6 col-lg-offset-3
				 pull-left">


		<?= Asset::img($restaurant->get_media('logo.png')->path, array("alt" => $restaurant->get_media('logo.png')->alt,
																'class' => "col-lg-6 col-lg-offset-3
																			col-md-6 col-md-offset-3
																			col-sm-6 col-sm-offset-3
																			col-xs-12 col-xs-offset-3
																			image-responsive")) ?>
	</div>

</section><!-- end home -->


<section class="about col-lg-12  pull-left
					  col-sm-12
					  col-md-12
					  col-xs-12 " id="about">

	<div class="about-container-1">
		<?= Asset::img($restaurant->get_media('1.jpg')->path, array('alt'=>$restaurant->get_media('1.jpg')->alt,
															'class' => " about-image-1 img-responsive img-rounded"
															))?>
	</div>

	<div class="about-container-2">

		<?= Asset::img($restaurant->get_media('2.jpg')->path, array('alt'=>$restaurant->get_media('2.jpg')->alt,
													'class' => " about-image-2 img-responsive img-rounded"
													))?>
	</div>

	<?= $restaurant->get_pageData('about') ?>

</section><!-- end about page -->

<section class="menu col-lg-12
					 col-md-12
					 col-sm-12
					 col-xs-12 pull-left"
							id="menu">

	<div class="inner-menu-container row">

		<div class="menu-container-1 col-lg-5  col-lg-offset-1
									 col-md-6
									 col-sm-6

											">

			<?= Asset::img($restaurant->get_media('3.jpg')->path, array('alt'=>$restaurant->get_media('3.jpg')->alt,
													'class' => "menu-image-1 img-responsive img-rounded"
													))?>
		</div>

		<div class="menu-container-2 col-lg-5
									 col-md-6
									 col-sm-6
									 col-xs-11

									 ">

			<?= Asset::img($restaurant->get_media('4.jpg')->path, array('alt'=>$restaurant->get_media('4.jpg')->alt,
																'class' => "menu-image-2 img-responsive img-rounded"
																))?>
		</div>


		<div class="menu-text-container row col-xs-12 col-lg-12 pull-left">

			<h3 class=" col-xs-5 col-lg-2 col-lg-offset-1 text-center">Our Menus</h3>

			<ul class="menu-items col-xs-7 col-lg-7 pull-left" >


				<?php foreach($restaurant->get_menus() as $menu): ?>

					<li>
						<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
					</li>

				<?php endforeach; ?>

			</ul><!-- end menu items -->

		</div><!-- end menu text -->

	</div><!-- end inner menu container -->


</section><!-- end menu section -->


<section class="location col-xs-12 col-lg-12 col-md-12 pull-left" id="location">

	<div class="inner-location-container row">

		<div class="location-text-container  col-lg-3 text-center">
			<h3>Location</h3>
			<p><?= $restaurant->get_location()->full_address ?></p>
			<?= $restaurant->get_pageData('hours') ?>
		</div>

		<div class="location-map-container  col-xs-12 col-lg-8">

			<div id="map_canvas" class="col-xs-offset-1"></div>

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




