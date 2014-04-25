<!DOCTYPE html>
<html>
	<head>
		<title><?= $restaurant->name ?></title>
		<meta charset="utf-8">
		<!-- Css -->
		<!-- mayers reset -->
		<?= Asset::css('template_1/reset.css') ?>
		<?= Asset::css('template_1/main.css') ?>
		<?= Asset::css('template_1/bootstrap.css') ?>
		<!-- Javascript -->


	</head>
	<body id="body">
		<nav>
			<ul>
				<li><?=  Html::anchor('#home', 'Home', array('class' => 'home-button'))?></li>
				<li><?=  Html::anchor('#about', 'About', array('class' => 'about-button'))?></li>
				<li><?=  Html::anchor('#menu', 'Menu', array('class' => 'menu-button'))?></li>
				<li><?=  Html::anchor('#location', 'Location', array('class' => 'location-button'))?></li>
			</ul>
		</nav><!-- end navigation -->

		<!-- fluid bootstrap container -->
		<div class="container-fluid">

			<!-- php view data -->
			<?= isset($body) ? $body : null ?>

		</div><!-- end container fluid -->


		<!-- Jquery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Jquery Library -->
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


		<!-- main.js -->
		<?= Asset::js('template_1/main.js', array(), null, true) ?>

	</body>

</html>