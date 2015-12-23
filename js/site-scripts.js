jQuery(document).ready(function(){

	WebFontConfig = {
		google: { families: [ 'Lora:400,400italic:latin' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();

	header_height = jQuery('.site-header').height();

	jQuery('.main-navigation .menu-item').css('height',header_height);
	jQuery('.home .secondary-navigation').css('display','none');
	jQuery('.secondary-navigation').css('padding-top',header_height);
	// jQuery('.secondary-navigation .menu-item').css('top',header_height);

	jQuery(function () {
		jQuery(window).bind( "resize", function ( event ) {
			changed_header_height = jQuery('.site-header').height();
			jQuery('.site-header').css('height',changed_header_height);
			jQuery('.site-title svg').css('height',changed_header_height);
			// jQuery('.main-navigation .menu-item').css('height',changed_header_height);
			jQuery('.secondary-navigation').css('padding-top',changed_header_height);
			// jQuery('.secondary-navigation .menu-item').css('top',header_height);
		});
	});

	jQuery('.main-navigation').hover(function() {
		jQuery('.secondary-navigation').css('display', 'block');
	});
	jQuery('.main-navigation .menu-item.exploration').hover(function() {
		jQuery('.secondary-navigation .menu-item').removeClass('current-menu-item');
		jQuery('.secondary-navigation .menu-item.exploration').toggleClass('current-menu-item');
	});

	jQuery('.main-navigation .menu-item.outfitting').hover(function() {
		jQuery('.secondary-navigation .menu-item').removeClass('current-menu-item');
		jQuery('.secondary-navigation .menu-item.outfitting').toggleClass('current-menu-item');
	});

	jQuery('.main-navigation .menu-item.expeditions').hover(function() {
		jQuery('.secondary-navigation .menu-item').removeClass('current-menu-item');
		jQuery('.secondary-navigation .menu-item.expeditions').toggleClass('current-menu-item');
	});

	jQuery('.main-navigation .menu-item.partnerships').hover(function() {
		jQuery('.secondary-navigation .menu-item').removeClass('current-menu-item');
		jQuery('.secondary-navigation .menu-item.partnerships').toggleClass('current-menu-item');
	});

	jQuery(window).on('resize', function(){
		// secondary_navigation_height = jQuery('.secondary-navigation .menu').height();
		// jQuery('.secondary-navigation .menu-item').css('height', secondary_navigation_height);
	});


});
