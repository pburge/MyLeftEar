<?php
return array(
	'_root_'  => 'main/index',  // The default route
	'_404_'   => 'error/404',    // The main 404 route

	'register' => 'auth/register',
	'login'    => 'auth/login',
	'logout'   => 'auth/logout',

	'profile/:username' => 'profile/view',
	
	'blog/:url' => 'blog/view'
);