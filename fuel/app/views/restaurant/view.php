<section class="home col-lg-12 pull-left" id="home">

	<div class="logo col-lg-6 col-lg-offset-3 pull-left">
		<?= Html::img('assets/media/images/pizzajohns/logo.png', array("alt" => "Restaurant Logo",
																'class' => "col-lg-6 col-lg-offset-3 image-responsive")) ?>
	</div>
</section><!-- end home -->


<section class="about col-lg-12 pull-left" id="about">
	<?= $restaurant->get_markdown('about') ?>
</section><!-- end about page -->



<section class="menu col-lg-12 pull-left" id="menu">

	<h4>Our Menus</h4>

	<div class="menu-items sixteen columns">
		<ul>
			<?php foreach($restaurant->get_menus() as $menu): ?>
				<li>
					<?php echo   Html::anchor("{$restaurant->url}/menu/{$menu->data}", $menu->type);
					echo $menu->type;

					echo $restaurant->get_menu($menu->type);
					?>


				</li>
			<?php endforeach; ?>
		</ul>
	</div><!-- end menu-items -->

</section><!-- end menu section -->


<section class="location" id="location">
	<p>Location</p>
</section><!-- end location section -->




