<?php
/**
 * Template Name: Case Results 
 *

 */

get_header(); ?>



<?php include('banner.php');?>


<div class="inner_container">
	
	
	<div class="case_inner_flex_spacer"></div><!-- inner_flex_spacer -->
	
	
	<div class="case_desktop_container_wrapper">
	
		<?php get_sidebar('caseresults'); ?>
		
		
		<div class="case_content_wrapper">
		
		
			<div class="content">
			
				<div class="case_inner_content">
					
	
					<div class="tabs_content one">
	
						
						
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_antitrust.png"/>
							
							<span class="tab_img_title"><?php the_field('antitrust_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						<?php if(get_field('anti_trust_cases')): ?>
						 
							<?php while(has_sub_field('anti_trust_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						
												
					</div><!-- tabs_content -->
					
					
					
					<div class="tabs_content two">
	
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_data.png"/>
							
							<span class="tab_img_title"><?php the_field('data_breach_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						
						
						<?php if(get_field('data_breach_cases')): ?>
						 
							<?php while(has_sub_field('data_breach_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						
					
					</div><!-- tabs_content -->
					
					
					<div class="tabs_content three">
	
						
						
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_consumer.png"/>
							
							<span class="tab_img_title"><?php the_field('consumer_protection_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						<?php if(get_field('consumer_protection_cases')): ?>
						 
							<?php while(has_sub_field('consumer_protection_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						
					</div><!-- tabs_content -->
					
					
					
					
					
					
					
					
					<div class="tabs_content four">
	
						
						
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_securities.png"/>
							
							<span class="tab_img_title"><?php the_field('securities_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						<?php if(get_field('securities_cases')): ?>
						 
							<?php while(has_sub_field('securities_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						

					</div><!-- tabs_content -->
					
					
					
					
					
					
					
					
					<div class="tabs_content five">
	
						
						
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_prod_liability.png"/>
							
							<span class="tab_img_title"><?php the_field('product_liability_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						<?php if(get_field('product_liability_cases')): ?>
						 
							<?php while(has_sub_field('product_liability_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						
						
					</div><!-- tabs_content -->
					
					
					
					
					
					
					
					<div class="tabs_content six">
	
						
						
						<div class="tab_content_title_wrapper">
							
							<img class="tab_accordian_img" src="<?php bloginfo('template_directory');?>/images/results_patents.png"/>
							
							<span class="tab_img_title"><?php the_field('intellectual_property_title');?></span><!-- img_title -->
						
						</div><!-- tab_content_title_wrapper -->
						
						<?php if(get_field('intellectual_property_cases')): ?>
						 
							<?php while(has_sub_field('intellectual_property_cases')): ?>
						 
								
								<div class="single_tab_content">
							
									<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
									<?php the_sub_field('summary');?>

								</div><!-- single_tab_content -->
								
								
								<?php endwhile; ?>
						 
						<?php endif; ?>
						
					</div><!-- tabs_content -->
					
					
			
				
				
				
				
				
				
				
				
				
				
				</div><!-- case_inner_content -->
			
			</div><!-- content -->
		
		
		</div><!-- case_content_wrapper -->
	
		
		
		</div><!-- case_desktop_container_wrapper -->
		
		<div class="case_inner_flex_spacer"></div><!-- bio_inner_flex_spacer -->
	
	</div><!-- inner_container -->

<?php get_footer(); ?>
