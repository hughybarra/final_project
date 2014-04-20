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
		<!-- main.js -->
		<?= Asset::js('template_1/main.js', array(), null, true) ?>

	</body>

</html>