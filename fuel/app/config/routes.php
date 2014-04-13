<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route


	'login'  => 'user/login',
	'signup' => 'user/signup',

	//Restaurant Routing List
	//--------------------------------

	':url/(:any)' => 'restaurant/$2',
	':url'        => 'restaurant/view',
);