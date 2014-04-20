<?= Html::doctype('html5') ?>
	<head>
		<title><?= $restaurant->name ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<!-- Css -->
		<!-- mayers reset -->
		<?= Asset::css('reset.css') ?>
		<!-- Skeleton Css -->
		<?php //Asset::css('bootstrap.css') ?>
		<!-- main css -->
		<?= Asset::css('main.css') ?>
		<script src="//vjs.zencdn.net/4.5/video.js"></script>
	</head>

	<?php
		// if page = home load in the videoslider
	?>
	<body>

		<nav class="">
			<ul>
				<li><?=  Html::anchor('http://localhost:8886/project/public/'.$restaurant->url.'/about', 'about')?></li>
				<li><?=  Html::anchor('http://localhost:8886/project/public/'.$restaurant->url.'/menu', 'Menu')?></li>
				<li><?=  Html::anchor('http://localhost:8886/project/public/'.$restaurant->url.'/location', 'Location')?></li>
			</ul>
		</nav><!-- end navigation -->


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






