<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvl
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" />

<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo( 'template_directory'); ?>/vendor/jquery/dist/jquery.min.js"
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/js/main.js"></script>


<?php wp_head(); ?>

<!--
Website by @superdopesauce
       _           _                                 _______          _           _
      | |         | |                               |__   __|        (_)         | |
      | |   ___   | |__    _ __    _ __    _   _       | |     _ __   _   _ __   | |__
  _   | |  / _ \  | '_ \  | '_ \  | '_ \  | | | |      | |    | '__| | | | '_ \  | '_ \
 | |__| | | (_) | | | | | | | | | | | | | | |_| |      | |    | |    | | | | | | | | | |
  \____/   \___/  |_| |_| |_| |_| |_| |_|  \__, |      |_|    |_|    |_| |_| |_| |_| |_|
                                            __/ |
                                           |___/
-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#main">--><?php //esc_html_e( 'Skip to content', 'mvl' ); ?><!--</a>-->

	<header id="masthead" class="main-container" role="banner">
		<div class="base-margin-top base-margin-bottom">

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-header text-medium pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-header text-medium pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

//			$description = get_bloginfo( 'description', 'display' );
//			if ( $description || is_customize_preview() ) : ?>


            <nav id="site-navigation" class="main-navigation text-medium base-margin-top pull-right" role="navigation ">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav>
            <!-- #site-navigation -->

            <div style="clear: both;"></div>

        </div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
