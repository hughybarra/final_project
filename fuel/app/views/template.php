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
				<li><?=  Html::anchor('#home', 'Home')?></li>
				<li><?=  Html::anchor('#about', 'about')?></li>
				<li><?=  Html::anchor('#menu', 'Menu')?></li>
				<li><?=  Html::anchor('#location', 'Location')?></li>
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
				this script is resposable for creating the google map embedded ont he page.
				the attributes below are requirements for the google map targeted at the
				map_canvas div


				php is dropping long and latitude variables into the google map renderer
				I"m sure there might be a better way to do this maybe we can come up with something better in class?
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
			      title: 'Hello World!'
			  	});
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<!-- end google maps init -->


		<!-- main.js -->
		<?= Asset::js('template_1/main.js', array(), null, true) ?>

	</body>

</html>