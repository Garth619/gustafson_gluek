<?php
/**
 * Template Name: Main

 */

get_header(); ?>



<section class="hero_banner">

	<div class="inner_hero_wrapper">
	
		<div class="hero_banner_content">
	
			<span class="sub_header mobile">National</span><!-- sub_header -->
			<span class="large_header mobile">Complex<br/>Litigation<br/>Practice</span><!-- large_header -->
			
			<span class="sub_header desktop">Dedicated to the protection of</span><!-- sub_header -->
			<span class="large_header desktop">Consumer Rights and Fair Competition</span><!-- large_header -->
		
			<span class="description"><?php the_field('description','option');?></span><!-- description -->
		
			<a class="green_button request_button" href="#request"><?php the_field('request_button');?></a>
	
		</div><!-- hero_banner_content -->
	
	</div><!-- inner_hero_wrapper -->
	
	
</section><!-- hero_banner -->




<section class="free_consultation">
	
	<a href="#request"><?php the_field('mobile_request_button');?></a>
	
</section><!-- free_consultation -->




<section id="experience_section">
	
	<div class="experience_inner_wrapper">
	
		<div class="experience_content">
		
			<span class="experience_content_header"><?php the_field('we_are_here_for_you_title');?></span>
		
			<p><?php the_field('we_are_here_for_you_content');?></p>
		
		</div><!-- experience_content -->
	
		<div class="slide_vertical_center">
		
		<div class="slide_wrapper">
			
			
		
			
				<div class="slide">
		
					<img class="svg_icon" src="<?php bloginfo('template_directory');?>/images/sp-03.svg"/>
		
					<span class="large_header"><?php the_field('ex_1_title');?></span><!-- large_header -->
		
					<div class="gold_line"></div><!-- Gold Line -->
		
					<span class="sub_content"><?php the_field('ex_1_sub_title');?></span><!-- sub_content -->
		
			</div><!-- slide -->
	
		
			<div class="slide">
		
					<img class="svg_icon" src="<?php bloginfo('template_directory');?>/images/sp-01.svg"/>
		
					<span class="large_header"><?php the_field('ex_2_title');?></span><!-- large_header -->
		
					<div class="gold_line"></div><!-- Gold Line -->
		
					<span class="sub_content"><?php the_field('ex_2_sub_title');?></span><!-- sub_content -->
		
			</div><!-- slide -->
	
		
		
			<div class="slide">
		
					<img class="svg_icon" src="<?php bloginfo('template_directory');?>/images/sp-02.svg"/>
		
					<span class="large_header"><?php the_field('ex_3_title');?></span><!-- large_header -->
		
					<div class="gold_line"></div><!-- Gold Line -->
		
					<span class="sub_content"><?php the_field('ex_3_sub_title');?></span><!-- sub_content -->
		
			</div><!-- slide -->
			
			
	
		</div><!-- slide_wrapper -->
	
	</div><!-- slide_vertical_center -->
	
	
	<div style="clear:both;"></div><!-- clear hack -->
	
	</div><!-- experience_inner_wrapper -->
	

</section><!-- experience_section -->





<section id="about">
	
	<div class="large_header_desktop_wrapper">
	
		<span class="large_header"><?php the_field('about_header');?></span><!-- large_header -->
		
	</div><!-- large_header_desktop_wrapper -->

	
	
	<div class="about_inner_wrapper">
	
		<div class="about_content">
			
			<span class="about_excerpt"><?php the_field('about_pull_quote');?></span><!-- about_excerpt -->
			
			<span class="about_title"><?php the_field('about_subheader');?></span><!-- about_title -->
			
			<?php the_field('about_content');?>
			
		</div><!-- about_content -->
		
		<div class="about_pic">
			
			<img class="group_pic mobile" src="<?php the_field('about_mobile_image');?>"/>
			<img class="group_pic ipad" src="<?php the_field('about_tablet_image');?>"/>
			<img class="group_pic desktop" src="<?php the_field('about_desktop_image');?>"/>
			
			
			<img class="tritwo mobile" src="<?php bloginfo('template_directory');?>/images/element_triangle2.svg"/>
			<img class="tritwo ipad" src="<?php bloginfo('template_directory');?>/images/element_triangle.svg"/>
			
			
		</div><!-- about_pic  -->
		
	
	
	</div><!-- about_inner_wrapper -->
	
	
</section><!-- about -->




<section id="meet_our_team">
	
	<span class="large_header"><?php the_field('meet_our_team_title');?></span><!-- large_header -->
	
	<p><?php the_field('meet_our_team_summary');?></p>
	
	<div class="meet_the_team_center">
	
		<a class="meet_the_team gold_outline_button" href="<?php the_field('meet_our_team_link');?>"><?php the_field('meet_our_team_button');?></a>
	
	</div><!-- meet_the_team_center -->
	
</section><!-- meet_our_team -->


<section id="case_results">
	
	
	<div class="spacer"></div><!-- spacer -->
	
	<div class="case_results_inner_wrapper">
	
	<div class="desktop_case_results_content_wrapper">
	
		<span class="large_header"><?php the_field('our_case_summaries_section_title');?></span><!-- large_header -->
	
		<div class="case_results_content_wrapper">
	
			<p><?php the_field('our_case_summaries_content');?></p>
	
			<a class="gold_button mobile" href="<?php the_field('view_more_summaries_link');?>"><?php the_field('mobile_view_more_button');?></a><!-- gold_button -->
			<a class="green_button summaries_button" href="<?php the_field('view_more_summaries_link');?>"><?php the_field('view_more_summaries_button');?></a><!-- green_button -->
		
		</div><!-- case_results_content_wrapper -->
	
	</div><!-- desktop_case_results_content_wrapper -->
	

	<div class="case_results_slide_wrapper">
		
		
		
		<?php if(get_field('case_results_slider')): ?>
		 
			<?php while(has_sub_field('case_results_slider')): ?>
		 
				<?php the_sub_field('');?>
				
				<div class="slide_wrapper">
			
					<div class="slide">
				
						<div class="title_left">
				
							<span class="slide_header"><?php the_sub_field('slide_title');?></span><!-- large_header -->
							<span class="slide_sub_header"><?php the_sub_field('slide_category');?></span><!-- slide_sub_header -->
				
						</div><!-- title_left -->
				
						<img class="case_results_icon" src="<?php the_sub_field('slide_icon');?>"/>
				
						<div class="case_results_content">
					
					
						<div class="gold_line"></div><!-- gold_line -->
					
						<span><?php the_sub_field('slide_content');?>...</span>
					
					
						</div><!-- case_results_content -->
				
					</div><!-- slide -->
			
				</div><!-- slide_wrapper -->

		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		

		
	</div><!-- case_results_slide_wrapper -->
	
	</div><!-- case_results_inner_wrapper -->
	
	<div class="spacer"></div><!-- spacer -->
	
</section><!-- case_results -->






<section id="awards">
	
	<div class="awards_inner">
	
		<span class="large_header"><?php the_field('awards_title');?> //</span><!-- large_header -->

		<div class="slide_wrapper">
	
			
			<?php if(get_field('award_slides')): ?>
			 
				<?php while(has_sub_field('award_slides')): ?>
			 
					<div class="slide">
		
						<img src="<?php the_sub_field('slide');?>"/>
		
					</div><!-- slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
					
	</div><!-- slide_wrapper -->

	</div><!-- awards_inner -->

</section><!-- awards -->





<section id="experience_second_section">
	
	
	<div class="experience_header_wrapper">
	
		<span class="large_header"><?php the_field('second_experience_section_title');?></span><!-- large_header -->
	
	</div><!-- experience_header_wrapper -->
	
	<div class="experience_inner_wrapper">
	
		<div class="ex_pic_wrapper">
		
<!--
				<?php the_field('second_experience_mobile_image');?>
				<?php the_field('second_experience_tablet_image');?>
				<?php the_field('second_experience_desktop_image');?>
-->


				<img class="ex_pic mobile" src="<?php the_field('second_experience_desktop_image');?>"/>
				<img class="ex_pic ipad" src="<?php the_field('second_experience_desktop_image');?>"/>
				<img class="ex_pic desktop" src="<?php the_field('second_experience_desktop_image');?>"/>
				
				<img class="tritwo mobile" src="<?php bloginfo('template_directory');?>/images/element_triangle2.svg"/>
		
			</div><!-- ex_pic  -->
		
		<div class="experience_second_section_content">
			
			<span class="large_header"><?php the_field('second_experience_header');?></span><!-- large_header -->
		
			<?php the_field('second_experience_content');?>
		
		
		</div><!-- experience_second_section_content -->
	
	</div><!-- experience_inner_wrapper -->
	
	
</section><!-- experience_second_section -->




<section id="news_updates">
	
	<div class="news_loop_wrapper">
		
		<span class="large_header"><?php the_field('news_update_title');?> //</span><!-- large_header -->
		
		
		
		<?php $post_object = get_field('my_featured_post');

			if( $post_object ): 

			// override $post
			$post = $post_object;
			setup_postdata( $post ); ?>
    
    
			<div class="news_info">
			
				<div class="date_wrapper">
				
					<span class="day"><?php the_weekday() ?>  </span><!-- day -->
					<span class="date"><?php the_date(); ?> </span><!-- date -->
				
			</div><!-- date_wrapper -->
			
			<div class="category_wrapper">
			
				<span class="cat_header">
				
					<?php $categories = get_the_category();
 
						if ( ! empty( $categories ) ) {
						
							echo esc_html( $categories[0]->name );   
						} ?>
				
				</span><!-- cat_header -->
		
			</div><!-- category_wrapper -->
		
		</div><!-- news_info -->
		
		<div class="news_content_wrapper">
			
			
			<div class="news_image_wrapper">
			
<!-- 				<img class="news_image mobile" src="<?php bloginfo('template_directory');?>/images/image_03_ipad.jpg"/> -->
					
					
					<?php if(get_field('new_featured_image')):?>

							<?php $imageID = get_field('new_featured_image'); ?>
							<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
							<?php $menu_one = wp_get_attachment_image_src(get_field('new_featured_image'), 'myfeaturedimage'); ?>
							
							<img class="news_image desktop" src="<?php echo $menu_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
							
					<?php else:?>
					
							
							<img class="news_image desktop" src="<?php bloginfo('url');?>/wp-content/uploads/2016/12/featured-image.jpg"/>
					
					
					<?php endif;?>



<!-- 				<img class="news_image desktop" src="<?php bloginfo('template_directory');?>/images/image_03.jpg"/> -->
			
			</div><!-- news_image_wrapper -->
			
			<div class="inner_news_content">
			
				<span class="content_header"><?php the_title();?></span><!-- content_header -->
			
				<p><?php echo wp_trim_words( get_the_content(), 89, '...' );?></p>
			
				<a class="read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
			
			</div><!-- inner_news_content -->
			
		</div><!-- news_content_wrapper -->
		
		
    	    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	<?php endif; ?>
		
		
		
		<a class="view_more gold_gradient_button" href="<?php the_field('news_update_view_more_link');?>"><?php the_field('news_update_view_more_button');?></a>
		
		
		
		
		
	</div><!-- news_loop_wrapper -->
	
	
</section><!-- news_updates -->






		

<?php get_footer(); ?>
