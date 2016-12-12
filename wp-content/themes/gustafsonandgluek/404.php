<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	
	<div class="desktop_container_wrapper">
	
		<div class="content_wrapper">
		
		
			<div class="content">
			
				<h1 class="inner_header"><?php _e( 'Not Found', 'twentyten' ); ?></h1><!-- inner_header -->
			
				<div class="inner_content">
			
					<?php _e( 'Apologies, but the page you requested could not be found.', 'twentyten' ); ?>
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		<?php get_sidebar(); ?>
		
		</div><!-- desktop_container_wrapper -->
		
		<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>

	
				
				
				
				
				
				
					
				
		
