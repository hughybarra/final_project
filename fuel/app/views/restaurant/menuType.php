<?php
	// there is probably a better way of doing this.
	// any ideas?
	$menuType = Uri::segment(3);
?>

<div class="container">

	<?php echo $restaurant->get_menu($menuType); ?>

</div><!-- end container class -->