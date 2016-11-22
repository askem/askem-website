/* Custome Js */
jQuery(function($) {
	"use strict";
	
	//$('a').filter(function(idx, a) { return a.href == 'https://quote.askem.com/'; }).attr('href', '#').parent().addClass('form_toggler');
	
    $('#offcanvas_toggler').on('click', function(event) {
        event.preventDefault();
        $('body').addClass('offcanvas');
		$('.offcanvas_menu').addClass('bodycanvas');
    });
    $('.close_offcanvas, .offcanvas_overlay').on('click', function(event) {
        event.preventDefault();
        $('body').removeClass('offcanvas');
		$('.offcanvas_menu').removeClass('bodycanvas');
    });
    
    
    /* offcanvas form instead of nav */
    
     $('.form_toggler').on('click', function(event) {
        event.preventDefault();
        $('body').addClass('offcanvas');
		$('.offcanvas_form').addClass('bodycanvas');
    });
    $('.close_offcanvas, .offcanvas_overlay').on('click', function(event) {
        event.preventDefault();
        $('body').removeClass('offcanvas');
		$('.offcanvas_form').removeClass('bodycanvas');
    });
    
	
	/* Brand Slider */
	$("#brand_slider .slider-items").owlCarousel({
		items: 5, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [640, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false,
		autoPlay: 6000
	});
	
	/* Brand Slider Design 3 */
	$("#brand_slider_d3 .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 4], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
		itemsTablet: [640, 2], //2 items between 600 and 0;
		itemsMobile: [360, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false,
		autoPlay: 6000
	});
	
	/* Sticky */
	$(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.mainnav').addClass("sticky");			
        } else {
            jQuery('.mainnav').removeClass("sticky");
        }
    });
	
	/* Testimonials Slider */
	$("#testimonials_slider .slider-items").owlCarousel({
		items: 1, //10 items above 1000px browser width
		itemsDesktop: [1024, 1], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
		itemsTablet: [640, 1], //2 items between 600 and 0;
		itemsMobile: [480, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true,
		autoPlay: 6000
	});
	
	/* Team Slider */
	$("#team_slider .slider-items").owlCarousel({
		items: 3, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
		itemsTablet: [640, 1], //2 items between 600 and 0;
		itemsMobile: [480, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true,
		autoPlay: 6000
	});
	
	/* Team Slider Design 2 */
	$("#team_slider_d2 .slider-items").owlCarousel({
		items: 1, //10 items above 1000px browser width
		itemsDesktop: [1024, 1], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
		itemsTablet: [640, 1], //2 items between 600 and 0;
		itemsMobile: [480, 1],
		navigation: false,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: false,
		autoPlay: 6000
	});
	
	/* Screenshot Slider */
	$("#screenshot_slider .slider-items").owlCarousel({
		items: 4, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
		itemsTablet: [640, 1], //2 items between 600 and 0;
		itemsMobile: [480, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true,
		autoPlay: 6000
	});
	
	/* Screenshot Slider Design 3 */
	$("#screenshot_slider_d3 .slider-items").owlCarousel({
		items: 3, //10 items above 1000px browser width
		itemsDesktop: [1024, 3], //5 items between 1024px and 901px
		itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
		itemsTablet: [640, 1], //2 items between 600 and 0;
		itemsMobile: [480, 1],
		navigation: true,
		navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
		slideSpeed: 500,
		pagination: true,
		autoPlay: 6000
	});
	
	/* Fancybox */
	jQuery('.fancybox-media').fancybox({
		helpers : {
			media : {},
			overlay : {
				speedOut : 0,
				locked: false
			}
		}, // helpers
		beforeShow : function() {
			this.title = (this.title ? '' + this.title + '' : '') + 'Image ' + (this.index + 1) + ' of ' + this.group.length;
		}
	});
	
	/* Navigation */
	$('.main_navigation li a, .offcanvas_menu li a').click(function(e){
		"use strict"; 
		if ( $(this).hasClass('h_menu') ) {
			e.preventDefault();
			var $this = $($(this).attr('href'));
			$('html,body').animate({
			'scrollTop': $this.offset().top+'px'
		}, 1000);
			return false;
		}
	});
	
	/* Text Logo */
	$('.text_logo').click(function(e){
		"use strict"; 
		if ( $(this).hasClass('text_logo') ) {
		  e.preventDefault();
		  var $this = $($(this).attr('href'));
		  $('html,body').animate({
			'scrollTop': $this.offset().top+'px'
		  }, 1000);	//easeInOutCirc
		  return false;
		}
    });
	
	/* UItoTop */
    (function(jQuery) {
        jQuery.fn.UItoTop = function(options) {
            var defaults = {
                text: '',
                min: 200,
                inDelay: 600,
                outDelay: 400,
                containerID: 'toTop',
                containerHoverID: 'toTopHover',
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            var settings = jQuery.extend(defaults, options);
            var containerIDhash = '#' + settings.containerID;
            var containerHoverIDHash = '#' + settings.containerHoverID;
            jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
            jQuery(containerIDhash).hide().click(function() {
                    jQuery('html, body').animate({
                        scrollTop: 0
                    }, settings.scrollSpeed, settings.easingType);
                    jQuery('#' + settings.containerHoverID, this).stop().animate({
                        'opacity': 0
                    }, settings.inDelay, settings.easingType);
                    return false;
                })
                .prepend('<span id="' + settings.containerHoverID + '"></span>')
                .hover(function() {
                    jQuery(containerHoverIDHash, this).stop().animate({
                        'opacity': 1
                    }, 600, 'linear');
                }, function() {
                    jQuery(containerHoverIDHash, this).stop().animate({
                        'opacity': 0
                    }, 700, 'linear');
                });


            jQuery(window).scroll(function() {
                var sd = $(window).scrollTop();
                if (typeof document.body.style.maxHeight === "undefined") {
                    jQuery(containerIDhash).css({
                        'position': 'absolute',
                        'top': $(window).scrollTop() + $(window).height() - 50
                    });
                }
                if (sd > settings.min)
                    jQuery(containerIDhash).fadeIn(settings.inDelay);
                else
                    jQuery(containerIDhash).fadeOut(settings.Outdelay);
            });

        };
    })(jQuery);
	
	
});
