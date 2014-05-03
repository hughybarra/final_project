<div id="background-image">
	<?= Html::img("assets/media/images/pizzajohns/background.jpg", array('alt' => 'Restaurant background image', 'class' => '')) ?>
</div>
<section class="home col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left" id="home">


	<div class="logo
				col-xs-12
				col-sm-7 col-sm-offset-3
				col-md-6 col-md-offset-3
				col-lg-6 col-lg-offset-3
				 pull-left">


		<?= Asset::img($restaurant->get_media('logo.png')->path, array("alt" => $restaurant->get_media('logo.png')->alt,
																'class' => "col-lg-6 col-lg-offset-3
																			col-md-6 col-md-offset-3
																			col-sm-6 col-sm-offset-3
																			col-xs-12 col-xs-offset-3
																			image-responsive")) ?>
	</div>
</section><!-- end home -->


<section class="about col-lg-12  pull-left
					  col-sm-12
					  col-md-12
					  col-xs-12 " id="about">

	<div class="about-container-1">
		<?= Asset::img($restaurant->get_media('1.jpg')->path, array('alt'=>$restaurant->get_media('1.jpg')->alt,
															'class' => " about-image-1 img-responsive img-rounded"
															))?>
	</div>

	<div class="about-container-2">

		<?= Asset::img($restaurant->get_media('2.jpg')->path, array('alt'=>$restaurant->get_media('2.jpg')->alt,
													'class' => " about-image-2 img-responsive img-rounded"
													))?>
	</div>

	<?= $restaurant->get_pageData('about') ?>

</section><!-- end about page -->



<section class="menu col-xs-12
					 col-md-12
					 col-lg-12    pull-left" id="menu">

	<div class="inner-menu-container">

		<div class="menu-image-container 	col-xs-12
											col-sm-6
											col-md-6
											col-lg-5 col-lg-offset-1
											menu-container-1
									 		">
			<?= Asset::img($restaurant->get_media('3.jpg')->path, array('alt'=>$restaurant->get_media('3.jpg')->alt,
													'class' => "img-responsive img-rounded"
													))?>
		</div>

		<div class="menu-image-container 	col-xs-12
											col-sm-12
											col-md-6
									  		col-lg-5
									  		menu-container-2
									  		">

			<?= Asset::img($restaurant->get_media('4.jpg')->path, array('alt'=>$restaurant->get_media('4.jpg')->alt,
																'class' => "img-responsive img-rounded"
																))?>
		</div>

		<div class="menu-text-container row col-xs-12 col-lg-12 pull-left">

			<h3 class=" col-xs-5 col-lg-2 col-lg-offset-1 text-center">Our Menus</h3>

			<ul class="menu-items col-xs-7 col-lg-7 pull-left" >


				<?php foreach($restaurant->get_menus() as $menu): ?>
					<li>
						<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
					</li>
				<?php endforeach; ?>
			</ul><!-- end menu items -->
		</div><!-- end menu text -->
	</div><!-- end inner menu container -->


</section><!-- end menu section -->


<section class="location col-xs-12 col-lg-12 col-md-12 pull-left" id="location">

	<div class="inner-location-container row">

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




