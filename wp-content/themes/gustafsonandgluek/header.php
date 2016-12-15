<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/nimbus_sans/demo.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/source-serif-pro/stylesheet.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>


<header>
	
	<div class="inner_header">
	
		<div class="mobile_fixed_wrapper">
		
		<a href="<?php bloginfo('url');?>">
			<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
		</a>
	
		<div class="inner_header_right">
		
			<div class="mobile_menu">
			
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
				<div class="menu_bars"></div><!-- menu_bars -->
			
			</div><!-- mobile_menu -->
			
			<span class="mobile_menu_title">Menu</span><!-- mobile_menu_title -->
		
		</div><!-- inner_header_right-->
		
		</div><!-- mobile_fixed_wrapper -->
		
		<div class="lower_header">
			
			<a class="tel" href="tel:612.333.8844">612.333.8844</a>
			
		</div><!-- lower_header -->
		
		
	</div><!-- inner_header -->
		
	<nav class="menu">
		
		<div class="inner_nav">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
		</div><!-- inner_nav -->
			
	</nav>
		
	
</header>



			