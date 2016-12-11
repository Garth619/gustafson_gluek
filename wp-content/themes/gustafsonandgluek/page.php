<?php
/**
 * Template for displaying all pages
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="desktop_container_wrapper">
	
		<div class="content_wrapper">
		
		
			<div class="content">
			
				<h1 class="inner_header"><?php the_title(); ?></h1><!-- inner_header -->
			
				<div class="inner_content">
			
					<?php get_template_part( 'loop', 'page' ); ?>
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		<?php get_sidebar(); ?>
	
	</div><!-- inner_container -->

</div><!-- desktop_container_wrapper -->



<?php get_footer(); ?>
