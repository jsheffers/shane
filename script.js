jQuery(document).ready(function($) {
	
	if( $('#ipadcontent')[0] ) {
		$('#ipadcontent').cycle({
			fx: 'scrollLeft',
			speed:    1000, 
		    timeout:  5000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	}
	
	$('.form-checkbox').click(function(){
		$(this).toggleClass('checks');
		$(this).parent().toggleClass('parent');
	});
	
	$('#tothetop').localScroll();
	
	$('#webform-component-select-project-type label:first').addClass('first-label');


	$('#webform-component-select-project-type').wrap('<div id="ptype" />');



    var msie6 = $.browser == 'msie' && $.browser.version < 7;
  
	  if (!msie6) {
	    var top = $('#webform-component-select-project-type').offset().top - parseFloat($('#webform-component-select-project-type').css('margin-top').replace(/auto/, 0));
	    $(window).scroll(function (event) {
	      // what the y position of the scroll is
	      var y = $(this).scrollTop();
	      
	      // whether that's below the form
	      if (y >= top) {
	        // if so, ad the fixed class
	        $('#webform-component-select-project-type').addClass('fixed');
	      } else {
	        // otherwise remove it
	        $('#webform-component-select-project-type').removeClass('fixed');
	      }
	    });
	  }  


});

