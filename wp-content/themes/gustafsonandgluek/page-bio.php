<?php
/**
 * Template Name: Bio 
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="bio_inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	
	<div class="bio_desktop_container_wrapper">
	
		<?php get_sidebar('bio'); ?>
		
		
		<div class="bio_content_wrapper">
		
		
			<div class="content">
			
				<div class="bio_inner_content">
					
					
					<?php if(get_field('pull_quote')):?>
					
						<span class="pull_quote"><?php the_field('pull_quote');?></span><!-- pull_quote -->
						
					<?php endif;?>
			
					
					<?php the_field('bio_content');?>
					
					
					<?php if(get_field('download_vcard_link')):?>
					
						<a class="card" href="<?php the_field('download_vcard_link');?>" target="_blank">Download VCard</a>
						
					<?php endif;?>
					


				<?php if(get_field('additional_content_representatives_cases')):?>

					<span class="bio_view_additional_content">View Representative Cases</span><!-- view_additional_content -->
				
				
					<div class="bio_additional_content">
					
					
						<?php the_field('additional_content_representatives_cases');?>
					
					
					</div><!-- additionaL_content -->
				
				
				
				<?php endif;?>
				
				
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		
		
		</div><!-- desktop_container_wrapper -->
		
		<div class="bio_inner_flex_spacer"></div><!-- bio_inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>
