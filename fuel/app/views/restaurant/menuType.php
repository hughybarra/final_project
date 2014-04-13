<?php
	// there is probably a better way of doing this.
	// any ideas?
	$menuType = Uri::segment(3);
?>

<div class="container">
	<?= Markdown::parse($restaurant->get_menu($menuType)->menu->data)?>
</div><!-- end container class -->