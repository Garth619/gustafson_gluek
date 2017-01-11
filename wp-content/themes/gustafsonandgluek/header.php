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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=29" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<style type="text/css">




.inner_banner, .hero_banner {
	background: rgba(0, 0, 0, 0) url("<?php the_field('mobile_background_image','option');?>") no-repeat scroll center top / cover ;
}


@media screen and (min-width: 730px) {
	

.inner_banner, .hero_banner {
		background: rgba(0, 0, 0, 0) url("<?php the_field('tablet_background_image','option');?>") no-repeat scroll center top / cover ;
	}
	
} /* media query */


@media screen and (min-width: 1150px) {
	
	
	.hero_banner {
		background: rgba(0, 0, 0, 0) url("<?php the_field('desktop_main_page_banner','option');?>") no-repeat scroll center top / cover ;
	}
	
	



.inner_banner {
			background: rgba(0, 0, 0, 0) url("<?php the_field('desktop_background_image','option');?>") no-repeat scroll center top / cover ;
	}


	
} /* media query */





</style>

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
			
			<span id="menu_text_change" class="mobile_menu_title">Menu</span><!-- mobile_menu_title -->
		
		</div><!-- inner_header_right-->
		
		</div><!-- mobile_fixed_wrapper -->
		
		<div class="lower_header">
			
			<a class="tel" href="tel:<?php the_field('phone','option');?>"><?php the_field('phone', 'option');?></a>
			
			<div class="email_free_consultation">
				
				<a href="#request">
				
					<img src="<?php bloginfo('template_directory');?>/images/hero-email.svg"/>
				
				</a>
				
			</div><!-- email_free_consultation -->
			
		</div><!-- lower_header -->
		
		
	</div><!-- inner_header -->
		
	<nav class="mobile">
		
		<div class="inner_nav">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
		</div><!-- inner_nav -->
			
	</nav><!-- mobile -->
	
	
	<nav class="desktop">
		
		<div class="inner_nav">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
		</div><!-- inner_nav -->
			
	</nav><!-- desktop -->
		
	
</header>



			
