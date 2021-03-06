<section id="request">
	
<!-- 	<a name="free-consultation"/> -->
	
	<span class="large_header">request your free case consultation</span><!-- large_header -->
	<span class="sub_header">fill out the form below</span><!-- large_header -->
	
	<div class="form">
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		<span class="field_required"><span class="required_dot">•</span> all fields required</span><!-- field_required -->
	</div><!-- form -->
	
</section><!-- request -->



<footer>
	
	<div class="inner_footer">
		
		<div class="address_box_desktop_pattern">
	
			<div class="address_box">
		
				<img class="pin" src="<?php bloginfo('template_directory');?>/images/footer_map.png"/>
		
				<span class="address"><?php the_field('address', 9);?></span>
		
				<a class="tel" href="tel:<?php the_field('phone', 'option');?>"><?php the_field('phone', 'option');?></a>
		
				<a class="green_button map_button" href="<?php the_field('address_link', 9);?>" target="_blank">Map</a>
		
			</div><!-- address_box -->
	
		</div><!-- address_box_desktop_pattern -->

		<div class="social_media">
		
			<span class="follow_us">Follow Us</span><!-- follow_us -->
		
			<div class="social_media_wrapper">
		
<!--
				<div class="single_social_icon">
				
					<a href="<?php the_field('google_plus_link','option');?>" target="_blank">
						
						<img class="sm_icon" src="<?php bloginfo('template_directory');?>/images/footer_google_green.svg"/>
						<img class="sm_icon_hover" src="<?php bloginfo('template_directory');?>/images/footer_google_gold.svg"/>
					
					</a>
				
				</div>
--><!-- single_social_icon -->
				
				<div class="single_social_icon">
				
					<a href="<?php the_field('facebook_link','option');?>" target="_blank">
						
						<img class="sm_icon fb" src="<?php bloginfo('template_directory');?>/images/footer_fb_green.svg"/>
						<img class="sm_icon_hover fb" src="<?php bloginfo('template_directory');?>/images/footer_fb_gold.svg"/>
					
					</a>
				
				</div><!-- single_social_icon -->
				
				<div class="single_social_icon">
				
					<a href="<?php the_field('linkedin_link','option');?>" target="_blank">
						
						<img class="sm_icon linkedin" src="<?php bloginfo('template_directory');?>/images/footer_linkedin_green.svg"/>
						<img class="sm_icon_hover linkedin" src="<?php bloginfo('template_directory');?>/images/footer_linkedin_gold.svg"/>
					
					</a>
				
				</div><!-- single_social_icon -->
		
			</div><!-- social_media_wrapper -->
		
		</div><!-- social_media -->
		
	
	
	</div><!-- inner_footer -->
	
	
	
		<div class="copyright">
		
			<div class="copyright_inner_wrapper">
			
				<span> <?php the_field('copyright','option');?></span>
		
				
				<?php if(get_field('disclaimer_link','option')):?>
				
					<a class="disclaimer" href="<?php the_field('disclaimer_link','option');?>"><?php the_field('disclaimer','option');?></a>
				
				<?php endif;?>
				
			
			</div><!-- copyright_inner_wrapper -->
			
				<div class="greyline"></div><!-- greyline -->
		
				<a class="dark_logo" href="//ilawyermarketing.com" target="_blank">
					<img src="<?php the_field('ilaywermarketing_logo','option');?>"/>
				</a>
			
		</div><!-- copyright -->
	
		
	
		<div class="ilawyer">
		
			<a href="//ilawyermarketing.com" target="_blank">
				<img src="<?php bloginfo('template_directory');?>/images/ilawyer.svg"/>
			</a>
		
		</div><!-- ilawyer -->
	
	
	
	

</footer>
	
<?php wp_footer(); ?>




</body>
</html>
