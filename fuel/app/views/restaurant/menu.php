

<div class="about-container">
	<h4>Our Menus</h4>


	<div class="menu-page-items col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<ul>
			<?php foreach($restaurant->get_menus() as $menu): ?>
				<li>
					<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div><!-- end menu-items -->

</div><!-- end about container -->