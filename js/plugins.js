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
		$('.block-menu ul.menu .last a, .block-menu-block ul.menu .last a').attr('href', 'mailto:shanejeffers@mac.com');
		// $('.block-menu ul.menu .last a, .block-menu-block ul.menu .last a').click(function(){
		// 	$('.contact-full').slideToggle();
		// });

		$('.views-row-even.project-3 .featured-image').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInRightBig animated');
			} else {
				$(this).addClass('show');
			}
		});
		$('.views-row-even.project-3 .project-content').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInLeftBig animated');
			} else {
				$(this).addClass('show');
			}
		});

		$('.views-row-odd.project-4 .featured-image').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInLeftBig animated');
			} else {
				$(this).addClass('show');
			}
		});
		$('.views-row-odd.project-4 .project-content').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInRightBig animated');
			} else {
				$(this).addClass('show');
			}
		});

		$('.section .section-image').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInLeftBig animated');
			} else {
				$(this).addClass('show');
			}
		});
		$('.section .section-content').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInRightBig animated');
			} else {
				$(this).addClass('show');
			}
		});

		$('.section .section-image.right').bind('inview', function (event, visible) {
			if (visible === true) {
				$(this).addClass('fadeInRightBig animated');
			} else {
				$(this).addClass('show');
			}
		});

	});
})(jQuery);