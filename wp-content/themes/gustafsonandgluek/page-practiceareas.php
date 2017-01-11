<?php
/**
 * Template Name: Directory
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="no_sidebar_wrapper">
			
			
			<div class="header_wrapper">
				
				<span><?php the_title();?></span>
				
			</div><!-- header_wrapper -->
			
			
			<div class="directory">
				
			<?php if(is_page(2976)):?>
				
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sidenar' ) ); ?>
				
				<?php endif;?>
			
				<?php if(is_page(1435)):?>
				
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'currentinvestigations' ) ); ?>
				
				<?php endif;?>
	
	</div><!-- directory -->
						
			
</div><!-- no_sidebar_wrapper -->
		



<?php get_footer(); ?>
