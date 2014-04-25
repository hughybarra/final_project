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


	<h3 class="text-center col-lg-2 col-lg-offset-1">Our Menus</h3>

		<ul class="menu-items col-lg-7">


			<?php foreach($restaurant->get_menus() as $menu): ?>
				<li>
					<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
				</li>
			<?php endforeach; ?>
		</ul><!-- end menu items -->


</section><!-- end menu section -->


<section class="location col-lg-12 pull-left" id="location">

	<p>Location</p>

	<div id="map_canvas">

	</div><!-- End Google maps -->

</section><!-- end location section -->




