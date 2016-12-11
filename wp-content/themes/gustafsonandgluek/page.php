<?php
/**
 * Template for displaying all pages
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="inner_container">
	
	<div class="content_wrapper">
		
		
		<div class="content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- content -->
		
		
	</div><!-- content_wrapper -->
	
	<?php get_sidebar(); ?>
	
</div><!-- inner_container -->



<?php get_footer(); ?>
