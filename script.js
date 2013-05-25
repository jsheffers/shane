jQuery(document).ready(function($) {
	// IPAD CYCLE
	if( $('#ipadcontent')[0] ) {
		$('#ipadcontent').cycle({
			fx: 'scrollLeft',
			speed:    1000,
			timeout:  5000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	}

	// CHECKBOX ON CONTACT PAGE
	$('.form-checkbox').click(function(){
		$(this).toggleClass('checks');
		$(this).parent().toggleClass('parent');
	});
	$('#webform-component-select-project-type label:first').addClass('first-label');

	// ANIMATED SCROLL
	$('#tothetop').localScroll();

});