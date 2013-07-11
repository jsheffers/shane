(function ($) {
	$(function(){
		$(window).on('scroll', function(){
			$('.scrolled em').text($(window).scrollTop());
		});

		$('.row:even').addClass('even');
		$('.row:odd').addClass('odd');

		$('.featured-inner .btn-large, .sprites-close, .scroll-inner .btnLarge').click(function(){
			$('.contact-full').slideToggle();
		});

		$('.block-menu ul.menu .last a').click(function(){
			$('.contact-full').slideToggle();
			return false;
		});
	});
})(jQuery);
