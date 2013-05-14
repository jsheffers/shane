/*$(document).ready(function() {
	$('#left div.case:first p').css('background-color','#ffffff');
});*/

/// Adding a class to elements
$(document).ready(function() {
	$('#left div.case:even p').addClass('newclass');
});

/// Show Hide with two separate buttons
/*$(document).ready(function(){	
	$('#left div.case:first p').click(function(){
		$('#left div.case:last p').hide();
	});
	$('#left div.case:odd p').click(function(){
		$('#left div.case:last p').show();
	});
});*/

$(document).ready(function(){
	/*$('#btn').click(function(){
	$('#left div.case:first p').toggle();
	
	if ($('#left div.case:first p').is(':visible')) {
		$(this).val('Hide');
		}
		else {
			$(this).val('Show');
	}
	});*/
	
/*	$('.no-script').remove();
	
	$('<input type="button" id="btn" value="Toggle"/>')
		.appendTo('#container');
		$('#btn').click(function(){
		$('#left div.case:first p').slideUp('slow', function(){
			$('#btn').fadeOut();
		});
    });*/

	/*$('#ipad').click(function(){
		$(this).toggleClass('ipadHover');
	});*/
	
/*$('#menu li a').hover(
	function(){
	$(this).stop().animate($('#menu li a').addClass('hover');); 
}, function(){
	$(this).stop().animate($('#menu li a').addClass('hover');); 
});*/
	
$('#menu li a').click(function(){
	$(this).toggleClass('hover');
});

	
	
	
});