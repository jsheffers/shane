(function(e){e(function(){e(window).on("scroll",function(){e(".scrolled em").text(e(window).scrollTop())});e(".row:even").addClass("even");e(".row:odd").addClass("odd");e(".featured-inner .btn-large, .sprites-close, .scroll-inner .btnLarge").click(function(){e(".contact-full").slideToggle()});e(".views-row-even.project-3 .featured-image").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInRightBig animated"):e(this).addClass("show")});e(".views-row-even.project-3 .project-content").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInLeftBig animated"):e(this).addClass("show")});e(".views-row-odd.project-4 .featured-image").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInLeftBig animated"):e(this).addClass("show")});e(".views-row-odd.project-4 .project-content").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInRightBig animated"):e(this).addClass("show")});e(".section .section-image").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInLeftBig animated"):e(this).addClass("show")});e(".section .section-content").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInRightBig animated"):e(this).addClass("show")});e(".section .section-image.right").bind("inview",function(t,n){n===!0?e(this).addClass("fadeInRightBig animated"):e(this).addClass("show")})})})(jQuery);