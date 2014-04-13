<p>menu page</p>

<div class="about-container">
	<?php Markdown::parse($restaurant->get_menu('appetizers')->menu->data) ?>
	<hr>
	<div class="menu-items">
		<?php

			foreach($restaurant->get_menu_types()->menuTypes as $val)
			{
				echo Html::anchor('http://localhost:8886/project/public/pizzajohns/menu/'.$val->type, $val->type);

				echo '<div class="menu-items'>
			}

		?>
	</div><!-- end menu-items -->

</div>
<!-- end about container -->