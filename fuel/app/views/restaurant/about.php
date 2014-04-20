

<div class="container">

	<div class="sixteen columns">

		<div class="eight columns logo">
			<!-- logo -->
			<?= Html::img('assets/media/images/pizzajohns_logo.png', array("alt" => "Restaurant Logo", 'class' => "restaurant-logo")) ?>
		</div><!-- end logo div -->

		<div class="about-content">
			<?= $restaurant->get_markdown('about') ?>
		</div><!-- end eight colums -->
	</div>
	<!-- end eight colums div -->

</div>