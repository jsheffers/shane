(function ($) {
	$(function(){
		$(window).on('scroll', function(){
			$('.scrolled em').text($(window).scrollTop());
		});

		$('.row:even').addClass('even');
		$('.row:odd').addClass('odd');

		$('.featured-inner .btn-large').click(function(){
			$('.contact-full').slideToggle();
		});
	});
})(jQuery);
