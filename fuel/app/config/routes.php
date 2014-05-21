<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route


	'login'  => 'user/login',
	'signup' => 'user/signup',


	'files/(:any)'  => 'files/$1',


	//Restaurant Routing List
	//--------------------------------

	':url/menu/(:any)' => 'menu/view/$2',
	':url/(:any)' => 'restaurant/$2',
	':url'        => 'restaurant/view',




);