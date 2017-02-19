"use strict";

var App = function() {

    var handleHeaderSearchBox = function() {

        jQuery(".c-layout-header .c-search-icon.toggle").click(function() {
            jQuery(".c-search .form-control").animate({ "width": "toggle" }, 100);
        });

    };

    var handleMegamenu = function() {

        jQuery(".megamenu > ul.sub-menu").each(function() {
            var _self = jQuery(this);
            var child = _self.find("> li.sub-menu-item");
            var value = _self.height();

            child.css("height", value);

            jQuery(window).resize(function() {
                if (jQuery("body").width() >= 992) {
                    child.css("height", value);
                }
            });
        });

    };

    var handleHederMenuToggle = function() {

        jQuery(".c-header-navigation").smartmenus();
    
    };

    return {
        //main function to initiate the module
        init: function() {
            handleHeaderSearchBox();
            handleHederMenuToggle();
            handleMegamenu();
        }

    };
}();

jQuery(document).ready(function() {
	App.init();
});


    // get header height (without border)
    var getHeaderHeight = jQuery('.header_mf_sticky').outerHeight();

    // border height value (make sure to be the same as in your css)
    var borderAmount = 2;

    // shadow radius number (make sure to be the same as in your css)
    var shadowAmount = 30;

    // init variable for last scroll position
    var lastScrollPosition = 0;

    // set negative top position to create the animated header effect
    jQuery('.header_mf_sticky').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');

    jQuery(window).scroll(function() {
        var currentScrollPosition = jQuery(window).scrollTop();

        if (jQuery(window).scrollTop() > 2 * (getHeaderHeight + shadowAmount + borderAmount) ) {

            jQuery('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
            jQuery('.header_mf_sticky').css('top', 0);

            if (currentScrollPosition < lastScrollPosition) {
                jQuery('.header_mf_sticky').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');
            }
            lastScrollPosition = currentScrollPosition;

        } else {
            jQuery('body').removeClass('scrollActive').css('padding-top', 0);
        }
        
    });

// END
