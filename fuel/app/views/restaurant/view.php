<section class="home col-lg-12 pull-left" id="home">

	<div class="logo col-lg-6 col-lg-offset-3 pull-left">
		<?= Html::img('assets/media/images/pizzajohns/logo.png', array("alt" => "Restaurant Logo",
																'class' => "col-lg-6 col-lg-offset-3 image-responsive")) ?>
	</div>
</section><!-- end home -->


<section class="about col-lg-12 pull-left" id="about">
	<?= $restaurant->get_pageData('about') ?>
</section><!-- end about page -->



<section class="menu col-lg-12 pull-left" id="menu">

	<div class="inner-menu-container">

		<div class="menu-container-1 col-lg-5 col-lg-offset-1">

			<img src="http://localhost:8886/project/public/assets/media/images/pizzajohns/1.jpg" alt="image of pizza" class="menu-image-2 img-responsive img-rounded">

		</div>

		<div class="menu-container-2 col-lg-5">

			<img src="http://localhost:8886/project/public/assets/media/images/pizzajohns/1.jpg" alt="image of pizza" class="menu-image-2 img-responsive img-rounded	">

		</div>

		<div class="menu-text-container row col-lg-12 pull-left">

			<h3 class="text-center col-lg-2 col-lg-offset-1">Our Menus</h3>

			<ul class="menu-items col-lg-7">


				<?php foreach($restaurant->get_menus() as $menu): ?>
					<li>
						<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
					</li>
				<?php endforeach; ?>
			</ul><!-- end menu items -->
		</div><!-- end menu text -->
	</div><!-- end inner menu container -->


</section><!-- end menu section -->


<section class="location col-lg-12 pull-left" id="location">

	<div class="inner-location-container row">

		<div class="location-text-container col-lg-3 text-center">
			<h3>Location</h3>
			<p><?= $restaurant->get_location()->full_address ?></p>
			<?= $restaurant->get_pageData('hours') ?>
		</div>

		<div class="location-map-container row col-lg-8 pull-left ">

			<div id="map_canvas"></div>
		</div>

	</div>

</section><!-- end location section -->




