<?php
return array(
	'_root_'  			=> 'main/index',  // The default route
	'_404_'   			=> 'error/404',    // The main 404 route

	'register' 			=> 'auth/register',
	'login'    			=> 'auth/login',
	'logout'   			=> 'auth/logout',
	'patron'	 			=> 'auth/patron',
	'profile/:username' 	=> 'profile/view',
	'shop'				=> 'shop/shop', //<---- WHAT IS THIS BLACK MAGIC?! THIS ISN'T EVEN A PROPER DIRECTORY!

	'blog/:url' 			=> 'blog/view',
	'artists' 			=> 'artist/artists',
	'commissions' 			=> 'commission/commissions',
	'location'    			=> 'location/location', 
);