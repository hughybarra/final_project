<!DOCTYPE html>
<html>
	<head>
		<title><?= $restaurant->name ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Css -->
		<!-- decided not to go with this implementation -->
		<link type="text/css" href="<?php   /*Uri::create('files/cssTemplate/' . $restaurant->url . '.php') */ ?>"></link>

		<?= Asset::css('reset.css') ?>
		<?= Asset::css($restaurant->template.'/bootstrap.css'); ?>
		<?= Asset::css($restaurant->template.'/main.css'); ?>
		<!-- Favicon -->
		<link rel="shortcut icon" href=" <?php echo Asset::get_file($restaurant->get_media('favicon.ico')->path, 'img'); ?>">
	</head>

	<body id="body">

		<!-- fluid bootstrap container -->
		<div class="container-fluid">

			<!-- php view data -->
			<?= isset($body) ? $body : null ?>

		</div><!-- end container fluid -->


		<!-- Jquery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Jquery Library -->

		<!-- main.js -->
		<?= Asset::js($restaurant->template.'/main.js', array(), null, true) ?>

	</body>

</html>