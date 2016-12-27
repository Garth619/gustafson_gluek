<div class="case_sidebar">

	
	<div class="inner_header_wrapper">
	
		<h1 class="inner_header">Case Summaries</h1><!-- inner_header -->
	
	</div><!-- inner_header_wrapper -->
	
	<div class="case_content">
		
		<div id="accordion">
	
			<h3><?php the_field('antitrust_title');?></h3>
			
				<div>
				
					<?php if(get_field('anti_trust_cases')): ?>
						 
							<?php while(has_sub_field('anti_trust_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>

				</div>
			
				<h3><?php the_field('data_breach_title');?></h3>
			
	
			<div>
				
					<?php if(get_field('data_breach_cases')): ?>
						 
							<?php while(has_sub_field('data_breach_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>
			
			</div>
			
			<h3><?php the_field('consumer_protection_title');?></h3>
			
	
			<div>
				
				<?php if(get_field('consumer_protection_cases')): ?>
						 
							<?php while(has_sub_field('consumer_protection_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>
							
			</div>
			


			<h3><?php the_field('securities_title');?></h3>
			
		
			<div>
				
			
			<?php if(get_field('securities_cases')): ?>
						 
							<?php while(has_sub_field('securities_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>
				
				
							
			</div>
			

			
			<h3><?php the_field('product_liability_title');?></h3>
			
			
			<div>
				

			<?php if(get_field('product_liability_cases')): ?>
						 
							<?php while(has_sub_field('product_liability_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>

		
							
			</div>
			

			<h3><?php the_field('intellectual_property_title');?></h3>
			
		
			<div>
				

			<?php if(get_field('intellectual_property_cases')): ?>
						 
							<?php while(has_sub_field('intellectual_property_cases')): ?>
						 
								
								<span class="accordian_title"><?php the_sub_field('title');?></span><!-- accordian_title -->
				
								<?php the_sub_field('summary');?>
				
								
								
							<?php endwhile; ?>
						 
						<?php endif; ?>

				
				
							
			</div>

		</div><!-- accordion -->
		
		<div id="tabs">
			
			<h3 class="mytab one active">Antitrust</h3>
			<h3 class="mytab two">Data Breach</h3>
			<h3 class="mytab three">Consumer Protection</h3>
			<h3 class="mytab four">Securities</h3>
			<h3 class="mytab five">Product Liability</h3>
			<h3 class="mytab six">Intellectual Property & Patent&nbsp;Misuse</h3>
		
		</div><!-- tabs -->



		
		
	</div><!-- case_content -->
	
	
</div><!-- case_sidebar -->