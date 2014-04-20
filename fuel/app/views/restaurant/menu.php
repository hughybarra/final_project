

<div class="about-container">
	<h4>Our Menus</h4>


	<div class="menu-items sixteen columns">
		<ul>
			<?php foreach($restaurant->get_menus() as $menu): ?>
				<li>
					<?= Html::anchor("{$restaurant->url}/menu/{$menu->type}", $menu->type) ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div><!-- end menu-items -->

</div><!-- end about container -->