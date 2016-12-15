jQuery(document).ready(function(){

	
	
		
	
	
	
	
	
	// Case Results 
	
	
	jQuery( "#accordion" ).accordion({
		
		active: false,
		heightStyle: "content",
		collapsible : true
	
	});
	
	
	jQuery('.mytab').click(function() {
		
		jQuery(this).addClass('active');
		jQuery('.mytab').not(this).removeClass('active');
		
	});
	
	
	
	jQuery('.mytab.one').click(function() {
		
		jQuery('.tabs_content.one').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.one').fadeOut();
		
	});
	
	
	jQuery('.mytab.two').click(function() {
		
		jQuery('.tabs_content.two').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.two').fadeOut();
		
	});
	
	
	jQuery('.mytab.three').click(function() {
		
		jQuery('.tabs_content.three').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.three').fadeOut();
		
	});
	
	
	
	jQuery('.mytab.four').click(function() {
		
		jQuery('.tabs_content.four').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.four').fadeOut();
		
	});
	
	
	
	
	
	jQuery('.mytab.five').click(function() {
		
		jQuery('.tabs_content.five').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.five').fadeOut();
		
	});
	
	
	
	jQuery('.mytab.six').click(function() {
		
		jQuery('.tabs_content.six').delay(500).fadeIn();
		jQuery('.tabs_content').not('.tabs_content.six').fadeOut();
		
	});
	
	
		
	
	// Mobile Menu
	
	
	jQuery('.inner_header_right').click(function() {
		
		jQuery('nav').slideToggle(200);
		
	});
	
	
	jQuery('ul.menu > li.menu-item-has-children').click(function() {
		
		jQuery(this).children('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
	});

	
	
	
	
	
	
	
}); // End of document
