<?php
/**
 * Main template file

 */

get_header(); ?>

	<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	
	<div class="desktop_container_wrapper">
	
		<div class="content_wrapper">
		
		
			<div class="content">
			
				<h1 class="inner_header">Latest News</h1><!-- inner_header -->
			
				<div class="inner_content">
			
					<?php get_template_part( 'loop', 'index' );?>
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		<?php get_sidebar('blog'); ?>
		
		</div><!-- desktop_container_wrapper -->
		
		<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>

			

