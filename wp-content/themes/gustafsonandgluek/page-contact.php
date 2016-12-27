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
					
					
					<a class="adress" href="<?php the_field('address_link');?>" target="_blank"><?php the_field('address');?></a><!-- adress -->
					
					<a class="directions_button" href="<?php the_field('address_link');?>">Directions</a>
					
					
					</div><!-- address_wrapper -->
					
					
					
					<div class="address_icons_wrapper">
						
						<img src="<?php bloginfo('template_directory');?>/images/tel-icon.png"/>
						
						<a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a>
					
					</div><!-- address_icons_wrapper -->
					
					<div class="address_icons_wrapper">
						
						<img src="<?php bloginfo('template_directory');?>/images/printer-icon.png"/>
						
						<a href="tel:<?php the_field('fax_number');?>"><?php the_field('fax_number');?></a>
					
					</div><!-- address_icons_wrapper -->
					
					<div class="map">
						
						<?php the_field('iframe');?>
						
					</div><!-- map -->
					
			
				</div><!-- inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- content_wrapper -->
	
		<?php get_sidebar(); ?>
		
		</div><!-- desktop_container_wrapper -->
		
		<div class="inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>
