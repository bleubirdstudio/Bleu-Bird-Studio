<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html ng-app>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.8/angular.min.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.queryloader2.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroller.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.11/angular.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div class="container-fluid nav-section fixed-nav">
	<div class="container">
		<div class="row">
			<nav class="main-navigation cl-effect-5" role="navigation">
				<ul>
					<li><a href="#home"><span data-hover="home">Home</span></a></li>
					<li><a href="#who_we_are"><span data-hover="who we are">Who we are</span></a></li>
					<li><a href="#what_we_do"><span data-hover="what we do">What we do</span></a></li>
					<li><a href="#our_philosophy"><span data-hover="our philosophy">Our Philosophy</span></a></li>
					<li><a href="#contact"><span data-hover="contact">Contact</span></a></li>
					<li><a href="#blog"><span data-hover="blog">Blog</span></a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<a name="home"></a>
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
<div class="top pone"><span class="ptwo"></span></div>
<div class="header">
	<a href="#who_we_are" class="scroll-bird"> 
		<div class="bird"></div>
		<div class="bubble"><span>Scroll Down <br> Please!</span></div>    
	</a>
</div>

	<!-- <header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header> --><!-- #masthead -->

	<div id="main" class="site-main">
