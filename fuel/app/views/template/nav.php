<?
	// PRIMARY NAV.PHP

if(isset($_GET["url"])){
	$action = $_GET["url"];
}else{
	$action = "";
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Front End</title>
	
	<!-- CSS -->
	<?php // echo Asset::css('normalize.css'); ?>

	<?php echo Asset::css('foundation.css'); ?>
	<?php echo Asset::css('social-buttons.css'); ?>
	<?php echo Asset::css('main.css'); ?>


	<!-- Slick's CDN -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>

	<!-- Bootstrap's Font Awesome CDN. Used for icons. -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<header> 
		<div class="row show-for-medium-up">
			<div class="small-6 columns logo">
				<h1 class="bigger-h1-font mobile-bigger-h1">
					<a href="/">MY<span class='red'>LEFT</span>EAR</a>
				</h1>
			</div>
			<div class="small-6 columns drop mobile-line-break">
				<ul class="inline-list right move_icon_left">
					<?php if (isset($auth_user)): ?>
					<li>Hello, <?= Html::anchor($auth_user->profile_url(), $auth_user->username) ?></li>
					<?php else: ?>
					<li><h6><?= Html::anchor('login', '<i class="fa fa-sign-in"></i>Login') ?></h6></li>
					<li><h6><?= Html::anchor('register', '<i class="fa fa-user"></i>Register') ?></h6></li>
					<?php endif; ?>
					<li><h6><?= Html::anchor('cart', '<i class="fa fa-shopping-cart"></i>Shopping Cart') ?></h6></li>
				</ul>
			</div>
		</div>
		<div class="show-for-small-only">
			<div class="row">
				<div class="logo small-text-center">
					<h1 class="mobile-bigger-h1">
						<a href="/">MY<span class='red'>LEFT</span>EAR</a>
					</h1>
				</div>
				<div class="mobile-drop">
					<ul class="center mobile-bigger-font move_icon_left">
						<li><h6><a href="?url=login"><i class="fa fa-sign-in"></i>Login</a> or <a href="?url=register">Register</a></h6></li>
					<li class="move_icon_left"><h6><a href="?url=shopping_cart"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></h6></li>
					</ul>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='large-12 column'>
				<p class='border-no-hr'></p>
			</div>
		</div>
	</header>

	<div class="row raise">
		<div class="large-12 columns sticky ff-raise">
			<nav class="top-bar" data-topbar data-options="sticky_on: small">
			<ul class="title-area">
				<li class="name">
<!-- 					NEEDS TO BE HERE TO KEEP PROPER SPACING FOR MOBILE VIEW-->
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone. Keep it as is for now. -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			
			<section class="top-bar-section">
				<!-- Drop-Down Sub Nav Section. Dropdown sub nav highlights only seem to work in mobile view. --> 
				<ul class="left">
					<li <? echo ($action == 'product_types' || $action == 'product_painting' || $action == 'product_prints' || $action == 'product_photography') ? "class='active has-dropdown'" : "class='has-dropdown'"; ?>>
						<a href="?url=product_types">Product Types</a>
						<ul class="dropdown">
							<li <? echo ($action == 'product_painting') ? "class='active'" : ""; ?> ><a href="?url=product_painting">Paintings</a></li>
							<li <? echo ($action == 'product_prints') ? "class='active'" : ""; ?> ><a href="?url=product_prints">Prints</a></li>
							<li <? echo ($action == 'product_photography') ? "class='active'" : ""; ?> ><a href="?url=product_photography">Photography</a></li>
						</ul>
					</li>
					<li <? echo ($action == 'commission') ? "class='active'" : ""; ?> ><a href="?url=commission">Commission Work</a></li>
					<li <? echo ($action == 'artists') ? "class='active'" : ""; ?> ><a href="?url=artists">Artists</a></li>
					<li <? echo ($action == 'patron') ? "class='active'" : ""; ?> ><a href="?url=patron">Patron</a></li>
					<li <? echo ($action == 'blog') ? "class='active'" : ""; ?> ><a href="?url=blog">Blog</a></li>
					<li <? echo ($action == 'location') ? "class='active'" : ""; ?> ><a href="?url=location">Location</a></li>
					<!-- <li <? //echo ($action == 'change_log') ? "class='active'" : ""; ?> ><a href="change">Dev Change Log</a></li> -->
					<li <? echo ($action == 'change_log') ? "class='active'" : ""; ?></li><?= Html::anchor('dev/change', 'Change Log') ?>

				</ul>
			</section>
			</nav>
		</div>
	</div>

	</br>