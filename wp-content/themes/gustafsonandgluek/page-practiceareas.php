<?php
/**
 * Template Name: Practice Area Directory
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="no_sidebar_wrapper">
			
			
			<div class="header_wrapper">
				
				<span>Practice Areas</span>
				
			</div><!-- header_wrapper -->
			
			
			<div class="directory">
				
			
			
			<?php $posts = get_field('practice_area_directory');

				if( $posts ): ?>
   
				<ul>
				
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        
        	<?php setup_postdata($post); ?>
        
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					
					<?php endforeach; ?>
    
    		</ul>
    
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

		<?php endif; ?>
			
	
	</div><!-- directory -->
						
			
</div><!-- no_sidebar_wrapper -->
		



<?php get_footer(); ?>
