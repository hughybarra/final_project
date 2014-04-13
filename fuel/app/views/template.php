<?= Html::doctype('html5') ?>
	<head>
		<title><?= $restaurant->name ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<!-- Css -->
		<!-- mayers reset -->
		<?= Asset::css('reset.css') ?>
		<!-- Skeleton Css -->
		<?= Asset::css('skeleton.css') ?>
		<!-- main css -->
		<?= Asset::css('main.css') ?>
		<script src="//vjs.zencdn.net/4.5/video.js"></script>
	</head>

	<?php
		// if page = home load in the videoslider
	?>
	<body>

<!-- 		<video id="example_video_1" class="video-js vjs-default-skin"
			controls preload="auto" width="1400" height="1000"
			poster="http://video-js.zencoder.com/oceans-clip.png"
			data-setup='{"example_option":true}'>
			<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
			<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
			<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
		</video> -->
		<nav class="side-navigation">
				<ul>
					<li>About</li>
					<li>Menu</li>
					<li>Location</li>
				</ul>
		</nav>
		<!-- end navigation -->

		<!-- logo -->
		<?= Html::img('assets/media/images/pizzajohns_logo.png', array("alt" => "Restaurant Logo", 'class' => "restaurant-logo")) ?>

		<!-- end logo -->
		<?= isset($body) ? $body : null ?>

		<footer>
		</footer>

		<!-- Javascript -->
		<!-- Jquery -->
		<?= Asset::js('jquery-1.11.0.min.js', array(), null, true) ?>
		<!-- jquery video -->
		<link href="//vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">
		<!-- main.js -->
		<?= Asset::js('main.js', array(), null, true) ?>




</body>
</html>






