<?php
/**
 * Template Name: Team
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="no_sidebar_wrapper">
			
			
			<div class="header_wrapper">
				
				<span><?php the_title();?></span>
				
			</div><!-- header_wrapper -->
			
			
			<div class="meet_the_team_wrapper">
				
				
				
<?php $posts = get_field('team_directory');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
       
       <?php setup_postdata($post); ?>
        
       
       <a class="team_link" href="<?php the_permalink(); ?>">
					
					<div class="single_profile_wrapper">
						
						<?php if(get_field('bio_picture')):?>
	
	
							<?php $imageID = get_field('bio_picture'); ?>
							<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
							<?php $menu_one = wp_get_attachment_image_src(get_field('bio_picture'), 'bioimage'); ?>
	
							<img alt="<?php echo $alt_text; ?>" src="<?php echo $menu_one[0]; ?>"/>
	
						<?php else:?>
	
							<img alt="placeholder" src="<?php bloginfo('url');?>/wp-content/uploads/2016/12/profile_gustafson2.jpg"/>
							
						<?php endif;?>
						
						<div class="profile_caption">
							
							<span class="caption_title"><?php the_title(); ?></span><!-- caption_title -->
							
							<span class="view_profile">View Profile</span><!-- view_profile -->
							
						</div><!-- profile_caption -->
						
					</div><!-- single_profile_wrapper -->
					
				</a><!-- team_link -->

  
    <?php endforeach; ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>
				
				
			</div><!-- meet_the_team_wrapper -->					
			
		</div><!-- no_sidebar_wrapper -->
		



<?php get_footer(); ?>
