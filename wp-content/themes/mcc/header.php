<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Fonts -->
		<script src="https://use.typekit.net/kvp5zqq.js"></script>
    	<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="grid">
      <!--Header and Navigation-->
    <header>

    <!--Logo-->
    <div class="logo">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/logo.png" alt="logo" width="300"/></a>
    </div>

    <!--Address-->
    <div class="vcard">
        <div class="adr">
            <div class="street-address">453 Cumberland Place</div>
            <span class="locality">Nashville</span>, <span class="region">TN </span> <span class="postal-code"> 37215</span>
        </div>
        <div class="tel">615.679.9000</div>
        <a class="email" href="mailto:wayne@musiccityclosets.com">wayne@musiccityclosets.com</a>
    </div>

    <!--Mobile Navigation-->
    <div class="hamburger">
        <a href="#" class="js-mobile-trigger"><svg class="icon icon-menu"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-menu"></use></svg></a>
    </div>

    <nav class="mobile-nav js-mobile-nav">
        <div class="mobile-nav__close">
            <a href="#" class="js-mobile-nav-close">&times;</a>
        </div>
        <ul>
          <?php html5blank_nav(); ?>
        </ul>
    </nav>

    <!--navigation-->
    <nav class="nav">
		<?php html5blank_nav(); ?>
    </nav>

    </header>

    <main class="main">
