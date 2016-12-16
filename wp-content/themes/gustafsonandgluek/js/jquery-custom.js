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
		
		jQuery('nav.mobile').slideToggle(200);
		
		
	});
	
	
	jQuery('ul.menu > li.menu-item-has-children').click(function() {
		
		jQuery(this).children('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
	});

	
	// Consultaton Scroll
	
jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});


// Social Icons 

jQuery('.single_social_icon').mouseenter(function() {
	
	jQuery(this).find('.sm_icon').fadeOut(200);
	jQuery(this).find('.sm_icon_hover').fadeIn(200);
	
	
});


jQuery('.single_social_icon').mouseleave(function() {
	
	jQuery(this).find('.sm_icon').fadeIn(200);
	jQuery(this).find('.sm_icon_hover').fadeOut(200);
	
	
});




// Experience Section



jQuery('#experience_section .slide_wrapper').slick({
  	slidesToShow: 3,
		slidesToScroll: 3,
		arrows:false,
		dots:true,
	
		responsive: [
    {
      breakpoint: 1400,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:false,
				dots:true,
				
      }
    }
    
  ]
});



// Case Results


jQuery('.case_results_slide_wrapper').slick({
  	slidesToShow: 2,
		slidesToScroll: 2,
		arrows:false,
		dots:true,
		vertical:true,
		autoplay: true,
		 autoplaySpeed: 9000,
		responsive: [
    {
      breakpoint: 1600,
      settings: {
        infinite: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				arrows:false,
				dots:true,
				vertical:false,
      }
    },
    {
      breakpoint: 1145,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:false,
				dots:true,
				vertical:false,
      }
    }
    
  ]
});






// Awards Slides

jQuery('#awards .slide_wrapper').slick({
  	slidesToShow: 4,
		slidesToScroll: 4,
		arrows:false,
		dots:true,
	
		responsive: [
    {
      breakpoint: 1150,
      settings: {
        infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				arrows:false,
				dots:true,
      }
    },
    {
      breakpoint: 620,
      settings: {
        infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows:false,
				dots:true,
				
      }
    }
    
  ]
});



// Attorneys Bio Additional Content


jQuery('span.bio_view_additional_content').click(function() {
	
	
	jQuery(this).fadeOut(200);
	jQuery('.bio_additional_content').delay(500).fadeIn();
	
	
});

	
	
	
	
	
}); // End of document
