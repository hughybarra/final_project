

<div class="about-container">
	<?php Markdown::parse($restaurant->get_menu('appetizers')->menu->data) ?>

	<div class="menu-items sixteen columns">
		<ul>
			<?php
				// loop over all resturant types and generate a link
				foreach($restaurant->get_menu_types()->menuTypes as $val)
				{
					echo '<li>';
					echo Html::anchor('http://localhost:8886/project/public/pizzajohns/menu/'.$val->type, $val->type);
					// add thumbnail images in here
					echo'</li>';
				}// end for each loop
			?>
		</ul>
	</div><!-- end menu-items -->

</div><!-- end about container -->