(function ($) {
	$(function(){
		$(window).on('scroll', function(){
			$('.scrolled em').text($(window).scrollTop());
		});

		$('.row:even').addClass('even');
		$('.row:odd').addClass('odd');
	});
})(jQuery);
