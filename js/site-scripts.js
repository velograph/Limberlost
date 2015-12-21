jQuery(document).ready(function(){


	if (jQuery(window).width() > 860) {

		portal_height = jQuery('.alternating .section-supporting').height();
		jQuery('.alternated').css('height',portal_height);
		jQuery('.regular').css('height',portal_height);
		jQuery('.alternated .section-portal').css('height',portal_height);
		jQuery('.regular .section-portal').css('height',portal_height);

		jQuery(window).on('resize', function(){
			portal_change = jQuery('.alternating .section-supporting').height();
			jQuery('.alternated .section-portal').css('height',portal_change);
			jQuery('.regular .section-portal').css('height',portal_change);
		});

		jQuery(window).load(function(){
			portal_change = jQuery('.alternating .section-supporting').height();
			jQuery('.alternated .section-portal').css('height',portal_change);
			jQuery('.regular .section-portal').css('height',portal_change);
		});

	}

});
