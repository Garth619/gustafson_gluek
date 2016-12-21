<?php
/**
 * Template Name: Contact
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	
	<div class="desktop_container_wrapper">
	
		<div class="content_wrapper">
		
		
			<div class="content">
			
				<h1 class="inner_header"><?php the_title(); ?></h1><!-- inner_header -->
			
				<div class="inner_content">
			
					
					
					<div class="address_wrapper">
					
					
					<a class="adress" href="https://www.google.com/maps?ll=44.976167,-93.26158&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=120+South+6th+St+%232600+Minneapolis,+MN+55402" target="_blank">120 South 6th Street<br/>Suite 2600<br/>Minneapolis, MN 55402</a><!-- adress -->
					
					<a class="directions_button" href="">Directions</a>
					
					
					</div><!-- address_wrapper -->
					
					
					
					<div class="address_icons_wrapper">
						
						<img src="<?php bloginfo('template_directory');?>/images/tel-icon.png"/>
						
						<a href="tel:612.333.8844">612.333.8844</a>
					
					</div><!-- address_icons_wrapper -->
					
					<div class="address_icons_wrapper">
						
						<img src="<?php bloginfo('template_directory');?>/images/printer-icon.png"/>
						
						<a href="tel:612.333.8844">612.339.6622</a>
					
					</div><!-- address_icons_wrapper -->
					
					<div class="map">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.3504268000124!2d-93.27103218422893!3d44.977191979098144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b3329a32ecc2bf%3A0x2838eff319ecea42!2s120+South+6th+St+%232600%2C+Minneapolis%2C+MN+55402!5e0!3m2!1sen!2sus!4v1481568320690" frameborder="0" style="border:0" allowfullscreen></iframe>
						
					</div><!-- map -->
					
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		<?php get_sidebar(); ?>
		
		</div><!-- desktop_container_wrapper -->
		
		<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>
