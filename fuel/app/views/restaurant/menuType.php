<?php
	// there is probably a better way of doing this.
	// any ideas?
	$menuType = Uri::segment(3);
?>

<div id="background-image">
	<?= Asset::img($restaurant->get_media('background.jpg')->path, array('alt'=>$restaurant->get_media('1.jpg')->alt,
													'class' => ""
													))?>
</div>

<div class="menu-type-container text-center col-lg-6 col-lg-offset-3
											col-md-6 col-md-offset-3
											col-sm-6 col-sm-offset-3
											col-xs-12">

	<?php echo $restaurant->get_menu($menuType); ?>

</div><!-- end container class -->