<?
	// PRIMARY NAV.PHP
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
		<?php echo $header; ?>
		<?php echo $content; ?>
		<?php echo $footer; ?>

	</body>
</html>