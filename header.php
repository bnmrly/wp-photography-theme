<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bianco_nero
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bianco_nero' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<!-- BM CHANGE Remove .site-branding -->

				 <!-- <div class="site-branding">
		 		 <?php
		 		  if ( is_front_page() && is_home() ) : ?>
		 			 <h1 class="site-title"><a href="<?php  echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo(  'name' ); ?></a></h1>
		 		 <?php  else : ?>
		 			 <p class="site-title"><a href="<?php  echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo(  'name' ); ?></a></p>
		 		 <?php
		 		  endif;


			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
		endif; ?> -->
	 <!-- </div> --> <!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">

<!-- Div below ensures there is a link to the home-page displayed after the responsive menu hides #primary-menu -->

<div>
	<ul>
		<li class="home-link-site-title"><a href="http://localhost/bmphoto/">BEN MARLEY PHOTOGRAPHY</a></li>
	</ul>
</div>

			<!-- Remove Primary Menu button

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bianco_nero' ); ?></button> -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<div id="content" class="site-content">
