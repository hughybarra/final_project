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

<!-- 		<nav class="side-navigation">
				<ul>
					<li>About</li>
					<li>Menu</li>
					<li>Location</li>
				</ul>
		</nav> -->
		<!-- end navigation -->
		<div class="container">



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
		</div>
		<!-- end container div -->

</body>
</html>






