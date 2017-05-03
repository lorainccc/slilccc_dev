<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>
<div class="small-12 medium-12 large-12 columns maindiv">

		<div class="show-for-small-only">
		<div class="title-bar" data-responsive-toggle="main-mobile-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="main-mobile-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div id="main-mobile-menu" class="top-bar" >
			  <nav role="navigation" aria-label="<?php _e( 'Mobile Main Menu', 'lorainccc' );?>">
	   <ul id="responsive-menu"  class="vertical menu" data-drilldown data-parent-link="true">
					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
														'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),								
				));
     ?>
    </ul>
	</nav>
</div>
		</div>
	<div class="row maincolumn" data-equalizer >
			<div class="small-12 medium-12 larger-12 columns headerholder">
		<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo do_shortcode( '[wp-image-refresh]' ); ?>
					</a>			
				</div><!-- .site-branding -->
		</header><!-- #masthead -->
	</div>