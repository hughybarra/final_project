<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

	//Restaurant Routing List
	//--------------------------------
	// add regex for caps

	':url/(:any)' => 'restaurant/$2',
	':url'        => 'restaurant/view',
);