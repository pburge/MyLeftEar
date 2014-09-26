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
		<!-- FOR TABLETS AND DESKTOPS -->
		<div class="row show-for-medium-up">
			<div class="large-6 medium-3 small-6 columns logo">
				<h1 class="bigger-h1-font mobile-bigger-h1">
					<a href="/">MY<span class='red'>LEFT</span>EAR</a>
					<!-- <br><h6>Local Artists, Global Collectors</h6> -->
				</h1>
			</div>
			<div class="large-6 medium-9 small-6 columns drop mobile-line-break">
				<ul class="inline-list right move_icon_left">
					<?php if (isset($auth_user)): ?>
						<? if ($auth_user->group_id == 3) :?>
							<li><h6><i class="fa fa-male"></i> Hello, <?= Html::anchor('profile', $auth_user->username) ?></h6></li>
						<? elseif($auth_user->group_id == 6) : ?>
							<li><h6><i class="fa fa-male"></i> Hello, <?= Html::anchor('admin', $auth_user->username) ?></h6></li>
						<? elseif($auth_user->group_id == 7) : ?>
							<li><h6><i class="fa fa-male"></i> Hello, <?= Html::anchor('profile', $auth_user->username) ?></h6></li>
						<? endif ; ?>
					<li><h6><i class="fa fa-power-off"></i> <?= Html::anchor('logout', 'Logout') ?> </h6></li>
					<?php else: ?>
					<li><h6><?= Html::anchor('login', '<i class="fa fa-sign-in"></i>Login') ?></h6></li>
					<li><h6><?= Html::anchor('register', '<i class="fa fa-user"></i>Register') ?></h6></li>
					<?php endif; ?>
					<li><h6><?= Html::anchor('cart', '<i class="fa fa-shopping-cart"></i>Shopping Cart') ?></h6></li>
				</ul>
			</div>
		</div>
		<!-- MOBILE VIEW -->
		<div class="show-for-small-only">
			<div class="row">
				<div class="logo small-text-center">
					<h1 class="mobile-bigger-h1">
						<a href="/">MY<span class='red'>LEFT</span>EAR</a>
					</h1>
				</div>
				<div class="mobile-drop">
					<ul class="center mobile-bigger-font move_icon_left">
						<?php if (isset($auth_user)): ?>
						<? if ($auth_user->group_id == 3) :?>
							<li><h6><i class="fa fa-male"></i> Hello, <?= Html::anchor('profile', $auth_user->username) ?></h6></li>
						<? elseif($auth_user->group_id == 6) : ?>
							<li><h6><i class="fa fa-male"></i> Hello, <?= Html::anchor('admin', $auth_user->username) ?></h6></li>
						<? endif ; ?>
						<li><h6><i class="fa fa-power-off"></i> <?= Html::anchor('logout', 'Logout') ?> </h6></li>
						<?php else: ?>
						<li><h6><?= Html::anchor('login', '<i class="fa fa-sign-in"></i>Login') ?> or <?= Html::anchor('register', '<i class="fa fa-user"></i>Register') ?></h6></li>
						<?php endif; ?>
						<li><h6><?= Html::anchor('cart', '<i class="fa fa-shopping-cart"></i>Shopping Cart') ?></h6></li>
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
	<!-- NAVIGATION ELEMENTS -->
	<div class="row raise">
		<div class="large-12 columns sticky ff-raise">
			<nav class="top-bar" data-topbar data-options="sticky_on: small">
			<ul class="title-area">
				<li class="name">
					<!-- NEEDS TO BE HERE TO KEEP PROPER SPACING FOR MOBILE VIEW. DO NOT REMOVE OR FILL -->
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. 
				Take out "Menu" to just have icon alone. Keep it as is for now. -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			
			<section class="top-bar-section">
				<!-- Drop-Down Sub Nav Section. Dropdown sub nav highlights only seem to work in mobile view. --> 
				<ul class="left">
					<li <?=($_SERVER['REQUEST_URI'] == '/product/list') ? "class='active'" : "";?>><?= Html::anchor('product/list','Types of Art')?></li>
					<li <?=($_SERVER['REQUEST_URI'] == '/artists') ? "class='active'" : ""; ?>><?= Html::anchor('/artists','Artists')?></li>
					<li <?=($_SERVER['REQUEST_URI'] == '/commissions') ? "class='active'" : ""; ?>><?= Html::anchor('/commissions','Commission Work')?></li>
					<li <?=($_SERVER['REQUEST_URI'] == '/location') ? "class='active'" : ""; ?>><?= Html::anchor('/location','Location Search')?></li>
					<li <?=($_SERVER['REQUEST_URI'] == '/blog') ? "class='active'" : ""; ?>><?= Html::anchor('/blog','Blog')?></li>
				</ul>
			</section>
			</nav>
		</div>
	</div>

	</br>