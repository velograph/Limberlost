jQuery(document).ready(function(){

	WebFontConfig = {
		google: { families: [ 'Lora:400,700,400italic:latin' ] }
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

	jQuery( ".hamburger" ).click(function() {
		jQuery( ".mobile-menu-container" ).slideToggle( "slow", function() {
		// Animation complete.
		});
	});

});
