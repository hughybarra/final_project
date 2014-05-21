
<!-- background image -->

<div id="background-images" class="background-images">

	<div class="image-1 bg-image">
		<?= Asset::img($restaurant->get_media('background.jpg')->path, array('alt'=>$restaurant->get_media('background.jpg')->alt,
														'class' => "img-responsive"
														))?>
	</div>


<!--
	<div class="image-3 bg-image">
		<?= Asset::img($restaurant->get_media('6.jpg')->path, array('alt'=>$restaurant->get_media('6.jpg')->alt,
														'class' => "img-responsive"
														))?>
	</div>

	<div class="image-4 bg-image">
		<?= Asset::img($restaurant->get_media('7.jpg')->path, array('alt'=>$restaurant->get_media('7.jpg')->alt,
														'class' => "img-responsive"
														))?>
	</div> -->

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



<section class="home col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left" id="home">


	<div class="logo">


		<?= Asset::img($restaurant->get_media('logo.png')->path, array("alt" => $restaurant->get_media('logo.png')->alt,
																'class' => "
																			image-responsive")) ?>
	</div>

</section><!-- end home -->



<section class="about col-lg-12 pull-left" id="about" id="about">

	<div class="div-image pull-left">

		<?= Asset::img($restaurant->get_media('5.jpg')->path, array('alt'=>$restaurant->get_media('5.jpg')->alt,
														'class' => "img-responsive about-image"
														))?>
	</div>
	<div class="col-lg-6 col-lg-offset-1 about-text">

		<?= $restaurant->get_pageData('about') ?>

	</div>

</section><!-- end about page -->









<section class="menu col-lg-12 pull-left" id="menu">

	<div class="menu-text col-lg-6 col-lg-offset-1">
		<h3 class="">Our Menus</h3>

		<ul class="menu-items col-xs-7 col-lg-7 pull-left" >

			<?php foreach($restaurant->get_menus() as $menu): ?>

				<li>
					<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
				</li>

			<?php endforeach; ?>

		</ul><!-- end menu items -->
	</div><!-- end menu text -->


</section><!-- end menu section -->













<section class="location pull-left col-lg-12" id="location">

	<div class="location-text row col-lg-12 col-lg-offset-1">

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


