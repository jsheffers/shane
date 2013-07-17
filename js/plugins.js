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
		$('.block-menu ul.menu .last a, .block-menu-block ul.menu .last a').attr('href', '#');
		$('.block-menu ul.menu .last a, .block-menu-block ul.menu .last a').click(function(){
			$('.contact-full').slideToggle();
		});

		var controller = $.superscrollorama();
		// individual element tween examples
		controller.addTween('.project-3 .project-inner', TweenMax.from( $('.project-3 .project-inner'), .5, {css:{opacity: 0}}));
	});
})(jQuery);
