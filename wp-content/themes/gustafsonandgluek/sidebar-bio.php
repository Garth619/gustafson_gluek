<div class="bio_sidebar">

	
	<div class="inner_header_wrapper">
	
		<h1 class="inner_header"><?php the_title(); ?></h1><!-- inner_header -->
	
	</div><!-- inner_header_wrapper -->
	
	
	
	<?php if(get_field('bio_picture')):?>
	
	
	<?php $imageID = get_field('bio_picture'); ?>
	<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
	<?php $menu_one = wp_get_attachment_image_src(get_field('bio_picture'), 'bioimage'); ?>
	
	<img alt="<?php echo $alt_text; ?>" src="<?php echo $menu_one[0]; ?>"/>
	
	
	<?php else:?>
	
	<img alt="placeholder" src="<?php bloginfo('url');?>/wp-content/uploads/2016/12/profile_gustafson2.jpg"/>
	
	
	<?php endif;?>

	
	<div class="bio_content">
		
		
		<?php if(get_field('sidebar_info')): ?>
		 
			<?php while(has_sub_field('sidebar_info')): ?>
		 
				<span class="bio_sidebar_title"><?php the_sub_field('list_title');?></span><!-- bio_sidebar_title -->
				
				
				<?php if(get_sub_field('bullet_lists')): ?>
		 
					<ul>
			
						<?php while(has_sub_field('bullet_lists')): ?>
				
			
							<li><?php the_sub_field('bullet');?></li>
			
			
							<?php endwhile; ?>
			
			
					</ul>
		 
				<?php endif; ?>	
				
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- bio_content -->
	
	
</div><!-- bio_sidebar -->
