jQuery(document).ready(function(){

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
	
	
		
	
	
	
	
	
	
	
	
	
}); // End of document
