<?php
return array(
	'_root_'  			          => 'main/index',  // The default route
	'_404_'   			          => 'error/404',    // The main 404 route

	'register' 			          => 'auth/register',
	'login'    			          => 'auth/login',
	'logout'   			          => 'auth/logout',

	// artist profile
	// 'artist/profile'				=> 'artist/profile',

	'profile' 	                    => 'profile/index',
	'profile/patron'               	=> 'profile/patron',
	'profile/artist'               	=> 'artist/profile/index',


	'blog/:url' 			          => 'blog/view',

	// blog admin
	'admin/article/:url/(:any)'         => 'admin/article/$2',
	'admin/article/:url'                => 'admin/article/view',

	
	'artists' 			          => 'artists/index',
	'artist/:url/:piece'	          => 'artist/view',
	'artist/:url'			          => 'artist/index',
	'commissions' 			          => 'commission/index',
	'location'                         => 'location/index', 
);