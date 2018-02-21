jQuery(document).ready(function(){
	"use strict";

	/* Mobile Menu */
	jQuery(document).ready(function () {
		jQuery('header nav.site-navigation').meanmenu();
	});

	/* FitVids */
	jQuery(document).ready(function(){
		// Target your .container, .wrapper, .post, etc.
		jQuery(".WPlookLatestNews .image, iframe").fitVids();
	});


	/* Flex Slider Teaser */
	jQuery(window).load(function() {
		jQuery('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			pauseOnAction: true,
			pauseOnHover: true,
			controlNav: "thumbnails",
			start: function(slider) {
				jQuery( '.flexslider' ).removeClass('loading');
			}
		});
	});

	/* Featured News Slider */
	jQuery(window).ready(function() {
		jQuery('.flexslider-news').flexslider({
		controlNav: false,
		directionNav:true,
		animationLoop: true,
		animation: "fade",
		useCSS: true,
		smoothHeight: true,
		slideshow: false,
		slideshowSpeed:3000,		
		pauseOnAction: true,
		touch: true,
		animationSpeed: 900,
		start: function(slider) {
				jQuery( '.flexslider-news' ).removeClass('loading');
			}
		});
	});

	/* Gallery Posts Slider */
	jQuery(window).ready(function() {
		
		jQuery('#flexslider-gallery-carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: true,
			itemWidth: 150,
			asNavFor: '.flexslider-gallery'
		});

		jQuery('.flexslider-gallery').flexslider({
			animation: "fade",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#flexslider-gallery-carousel",
			start: function(slider) {
				jQuery( '.flexslider-gallery' ).removeClass('loading');
			}
		});

	});


	/* Stick the menu */   
	jQuery(function() {
		// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = jQuery('#sticky_navigation').offset().top+40;
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
			var scroll_top = jQuery(document).scrollTop(); // our current vertical position from the top
			
			// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				jQuery('#sticky_navigation').stop(true).animate({ 'padding':'30px 0 25px 0;','min-height':'60px','opacity' : 0.99 }, 500);
				jQuery('#sticky_navigation').css({'position': 'fixed', 'top':0, 'left':0 });
			} else {
				jQuery('#sticky_navigation').stop(true).animate({ 'padding':'20px 0;','min-height':'60px', 'opacity' : 1}, 100);
				jQuery('#sticky_navigation').css({ 'position': 'relative' }); 
			}
		};
		
		sticky_navigation();

		jQuery(window).scroll(function() {
			sticky_navigation();
		});

	});


});