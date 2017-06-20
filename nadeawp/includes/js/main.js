/* <![CDATA[ */
jQuery(document).ready(function(jQuery) {
    'use strict';
    //-------------------- Header Secrch  --------------------//
    jQuery(".header-search-a").on('click', (function() {
        var header_search = jQuery(this);
        if (header_search.parent().hasClass(
            "header-search-active")) {
            header_search.parent().removeClass(
                "header-search-active");
            header_search.parent().find(
                ".header-search-form").slideUp(300);
        } else {
            header_search.parent().addClass(
                "header-search-active");
            header_search.parent().find(
                ".header-search-form").slideDown(300);
        }
    }));
    //-- Making the header fixed --
    var jQueryheader = jQuery('header#header');
    var jQueryheaderTop = jQueryheader.offset().top;
    jQuery('.offset').height(jQueryheader.outerHeight())
        //-- Window Scroll Functions --
    jQuery(window).scroll(function() {
        (jQuery(window).scrollTop() > jQueryheaderTop) ? jQuery
            ('.header').addClass('fixedHeader'): jQuery(
                '.header').removeClass('fixedHeader');
    });
    //--------------------------------------------------------------------------------------------
    /* ◄------ Accordion & Toggle -------------------------------► */
    jQuery("#accordianShortCode .accordionRow > a").on("click",
        function(e) {
            if (jQuery(this).parent().has("div")) {
                e.preventDefault();
            }
            if (!jQuery(this).hasClass("activeLine")) {
                // hide any open menus and remove all other classes
                jQuery("#accordianShortCode .accordionRow > a").removeClass(
                    "activeLine");
                jQuery(
                    "#accordianShortCode .accordionRow > .accordion-content"
                ).removeClass("opened");
                jQuery(
                    "#accordianShortCode .accordionRow > .accordion-content"
                ).slideUp(500);
                // open our new menu and add the activeLine class
                jQuery(this).addClass("activeLine");
                jQuery(
                    "#accordianShortCode .accordionRow > .accordion-content"
                ).addClass("opened");
                jQuery(this).next(".accordion-content").slideDown(
                    500);
            } else if (jQuery(this).hasClass("activeLine")) {
                jQuery(this).removeClass("activeLine");
                jQuery(
                    "#accordianShortCode .accordionRow > .accordion-content"
                ).removeClass("opened");
                jQuery(this).next(".accordion-content").slideUp(500);
            }
        });
    //--------------------------------------------------------------------------------------------
    //-- Accordion 2 --
    jQuery("#accordianShortCode2 .accordionRow > a").on("click",
        function(e) {
            if (jQuery(this).parent().has("div")) {
                e.preventDefault();
            }
            if (!jQuery(this).hasClass("activeLine")) {
                // hide any open menus and remove all other classes
                jQuery("#accordianShortCode2 .accordionRow > a").removeClass(
                    "activeLine");
                jQuery(
                    "#accordianShortCode2 .accordionRow > .accordion-content"
                ).removeClass("opened");
                jQuery(
                    "#accordianShortCode2 .accordionRow > .accordion-content"
                ).slideUp(500);
                // open our new menu and add the activeLine class
                jQuery(this).addClass("activeLine");
                jQuery(
                    "#accordianShortCode2 .accordionRow > .accordion-content"
                ).addClass("opened");
                jQuery(this).next(".accordion-content").slideDown(
                    500);
            } else if (jQuery(this).hasClass("activeLine")) {
                jQuery(this).removeClass("activeLine");
                jQuery(
                    "#accordianShortCode2 .accordionRow > .accordion-content"
                ).removeClass("opened");
                jQuery(this).next(".accordion-content").slideUp(500);
            }
        });
    //--------------------------------------------------------------------------------------------
    //-- tabs --
    jQuery('.tabsContainer').easytabs();
    //--------------------------------------------------------------------------------------------
    //-- Progressbar --
    jQuery('.progress-bar').on('each', (function() {
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(document).scrollTop();
        if (imagePos < topOfWindow + jQuery(window).height() *
            0.8) {
            jQuery(this).addClass("animated slideRightSlow");
        }
    }));
   
    //--------------------------------------------------------------------------------------------
    //-- Including the main nav contents in responsive main nav DIV --
    jQuery('.mainNav .navTabs').clone().appendTo('.responsiveMainNav');
    //-- Show and Hide responsive nav --
    jQuery('#responsiveMainNavToggler').on('click', (function(event) {
        event.preventDefault();
        jQuery('#responsiveMainNavToggler').toggleClass(
            'opened');
        jQuery('.responsiveMainNav').slideToggle(1000);
        jQuery('.responsiveMainNav').addClass('nav-active');
        if (jQuery('#responsiveMainNavToggler i').hasClass(
            'fa-bars')) {
            jQuery('#responsiveMainNavToggler i').removeClass(
                'fa-bars');
            jQuery('#responsiveMainNavToggler i').addClass(
                'fa-close');
        } else {
            jQuery('#responsiveMainNavToggler i').removeClass(
                'fa-close');
            jQuery('#responsiveMainNavToggler i').addClass(
                'fa-bars');
        }
    }));
    // dropdown level 1
    if (jQuery(".responsiveMainNav .navTabs > li > a").parent().has(
        "ul")) {
        jQuery(".responsiveMainNav .navTabs > li > a:first-child").addClass(
            "toggleResponsive");
        jQuery(".responsiveMainNav .navTabs > li > a:last-child").removeClass(
            "toggleResponsive");
    }
    jQuery(".responsiveMainNav .navTabs > li > .toggleResponsive").on(
        "click", function(e) {
            if (jQuery(this).parent().has("ul")) {
                e.preventDefault();
            }
            if (!jQuery(this).hasClass("activeLine")) {
                // hide any open menus and remove all other classes
                jQuery(
                    ".responsiveMainNav .navTabs > li > .toggleResponsive"
                ).removeClass("activeLine");
                jQuery(
                    ".responsiveMainNav .navTabs > li > .dropDown"
                ).slideUp(500);
                // open our new menu and add the activeLine class
                jQuery(this).addClass("activeLine");
                jQuery(this).next(
                    ".responsiveMainNav .navTabs > li > .dropDown"
                ).slideDown(500);
            } else if (jQuery(this).hasClass("activeLine")) {
                jQuery(this).removeClass("activeLine");
                jQuery(this).next(
                    ".responsiveMainNav .navTabs > li > .dropDown"
                ).slideUp(500);
            }
        });
    // dropdown level 2
    if (jQuery(".responsiveMainNav .navTabs > li > .dropDown > li > a")
        .parent().has("ul")) {
        jQuery(
            ".responsiveMainNav .navTabs > li > .dropDown > li > a:first-child"
        ).addClass("toggleResponsive");
        jQuery(
            ".responsiveMainNav .navTabs > li > .dropDown > li > a:last-child"
        ).removeClass("toggleResponsive");
    }
    jQuery(
        ".responsiveMainNav .navTabs > li > .dropDown > li > .toggleResponsive"
    ).on("click", function(e) {
        if (jQuery(this).parent().has("ul")) {
            e.preventDefault();
        }
        if (!jQuery(this).hasClass("activeLine")) {
            // hide any open menus and remove all other classes
            jQuery(
                ".responsiveMainNav .navTabs > li > .dropDown > li > .toggleResponsive"
            ).removeClass("activeLine");
            jQuery(
                ".responsiveMainNav .navTabs > li > .dropDown li .dropDown"
            ).slideUp(500);
            // open our new menu and add the activeLine class
            jQuery(this).addClass("activeLine");
            jQuery(this).next(
                ".responsiveMainNav .navTabs > li > .dropDown li .dropDown"
            ).slideDown(500);
        } else if (jQuery(this).hasClass("activeLine")) {
            jQuery(this).removeClass("activeLine");
            jQuery(this).next(
                ".responsiveMainNav .navTabs > li > .dropDown li .dropDown"
            ).slideUp(500);
        }
    });
    //-------------------- Owlslider Testimonials1 --------------------//
    jQuery("#owl-testimonials").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 3000,
        singleItem: true,
        //Pagination
        pagination: false
    });
    //-------------------- Owlslider Testimonials2 --------------------//
    jQuery("#owl-testimonials2").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 3000,
        singleItem: true,
        navigation: true,
        //Pagination
        pagination: false
    });
    //-------------------- Owlslider Testimonials3 --------------------//
    jQuery("#owl-testimonials3").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 3000,
        singleItem: true,
        navigation: true,
        //Pagination
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left fa-2x'></i>",
            "<i class='fa fa-angle-right fa-2x'></i>"
        ]
    });
    //-------------------- Owlslider OurClient --------------------//
    jQuery("#owl-OurClient").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 2],
            [700, 3],
            [1000, 5],
            [1200, 5],
            [1400, 5],
            [1600, 5]
        ],
        //Pagination
        pagination: false
    });
    //--------------------  Owlslider Blog Section --------------------//
    jQuery("#owl-latest-post").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 2],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
        ], //10 items above 1000px browser width
        //Pagination
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left fa-2x'></i>",
            "<i class='fa fa-angle-right fa-2x'></i>"
        ]
    });
    //--------------------  Owlslider LatestPost Home3 Section --------------------//
    jQuery("#owl-latest-post-home3").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1000, 2],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ], //10 items above 1000px browser width
        //Pagination
        pagination: false
    });
    //--------------------  Owlslider RecentWork Home3 Section --------------------//
    jQuery("#owl-ndab-recentwork").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 2],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
        ], //10 items above 1000px browser width
        //Pagination
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left fa-2x' style='color:#a4a4a4;'></i>",
            "<i class='fa fa-angle-right fa-2x' style='color:#a4a4a4;'></i>"
        ]
    });
    //--------------------  Owlslider RecentWork Home3 Section --------------------//
    jQuery("#owl-ndrecentworks3").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1000, 3],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ], //10 items above 1000px browser width
        //Pagination
        pagination: false
    });
    //--------------------  Owlslider Blog page --------------------//
    jQuery("#owl-blogpage-postslide").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 3000,
        singleItem: true,
        navigation: true,
        //Pagination
        pagination: true,
        navigationText: [
            "<i class='arrow_carrot-left' style='color:#7e8082;font-size: 2em;margin: 0px -5px;'></i>",
            "<i class='arrow_carrot-right' style='color:#7e8082;font-size: 2em;margin: 0px -5px;'></i>"
        ]
    });
    //--------------------  Owlslider Portfolio Page --------------------//
    jQuery("#owl-porsingle-postslide").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 3000,
        singleItem: true,
        navigation: true,
        //Pagination
        pagination: true,
        navigationText: [
            "<i class='arrow_carrot-left' style='color:#7e8082;font-size: 2em;margin: 0px -5px;'></i>",
            "<i class='arrow_carrot-right' style='color:#7e8082;font-size: 2em;margin: 0px -5px;'></i>"
        ]
    });
    /* 13 - Isotope Gallery
-----------------------------------------------------------*/
    jQuery(window).load(function() {
        var jQuerycontainer = jQuery('.portfolioContainer');
        jQuerycontainer.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        jQuery('.portfolioFilter a').click(function() {
            jQuery('.portfolioFilter .current').removeClass(
                'current');
            jQuery(this).addClass('current');
            var selector = jQuery(this).attr(
                'data-filter');
            jQuerycontainer.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });
    //-------------------- for portfoli lightbox jquary --------------------//
    jQuery(function() {
        var jQuerychosenSheet,
            jQuerystylesheets = jQuery("a[id^=theme-]");
        // run rlightbox
        jQuery(".lb").rlightbox();
        jQuery(".lb_title-overwritten").rlightbox({
            overwriteTitle: true
        });
    });
    if (is_touch_device()) {
        jQuery(".portfolio-image").on('click', function(e) {
            jQuery(this).find('.portfolio-hover').show();
        });
    }

    function is_touch_device() {
            return 'ontouchstart' in window // works on most browsers 
                || 'onmsgesturechange' in window; // works on ie10
        }
        (function() {
            //ISOTOPE
            // cache container
            var jQueryportfolioContainer = jQuery(
                '.portfolioContainer');
            // initialize isotope
            jQueryportfolioContainer.isotope({
                filter: '*',
                masonry: {
                    columnWidth: 1,
                    isResizable: true
                }
            });
        })();
    //-------------------- End PORTFOLIO ISOTOPE FILTER --------------------//
    //-------------------- Animation elements with CSS3 --------------------//
    var topOffset = jQuery(window).scrollTop() + (jQuery(window).height() *
        0.8);
    jQuery('.animation, .animation-visible').on('each', (function() {
        var imagePos = jQuery(this).offset().top;
        if (imagePos < topOffset) {
            jQuery(this).addClass('animated ' + jQuery(this)
                .attr('data-animation'));
        }
    }));
    jQuery(window).scroll(function() {
        var topOffset = jQuery(window).scrollTop() + (jQuery(
            window).height() * 0.8);
        jQuery('.animation, .animation-visible').on('each', (
            function() {
                var imagePos = jQuery(this).offset().top;
                if (imagePos < topOffset) {
                    jQuery(this).addClass('animated ' +
                        jQuery(this).attr(
                            'data-animation'));
                }
            }));
    });
    jQuery(window).resize(function() {
        jQuery(window).scroll(function() {
            var topOffset = jQuery(window).scrollTop() +
                (jQuery(window).height() * 0.8);
            jQuery('.animation, .animation-visible').on(
                'each', (function() {
                    var imagePos = jQuery(this)
                        .offset().top;
                    if (imagePos < topOffset) {
                        jQuery(this).addClass(
                            'animated ' +
                            jQuery(this).attr(
                                'data-animation'
                            ));
                    }
                }));
        });
    });
    //-------------------- End animation elements with CSS3 --------------------//
    //-------------------- Start Go Up --------------------//
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 200) {
            jQuery(".go-up").css("right", "20px");
        } else {
            jQuery(".go-up").css("right", "-60px");
        }
    });
    jQuery(".go-up").on('click', (function() {
        jQuery("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    }));
    /* ==============================================
	Preloader
	=============================================== */
    jQuery(window).load(function() {
        jQuery("#preloader").delay(500).fadeOut(1000);
        jQuery(".preload-logo").addClass('fadeOutLeft');
        jQuery(".back-logo").addClass('fadeOutRight');
        jQuery(".preload-gif").addClass('fadeOutUp');
    });
    // Navigation 
    jQuery(".navTabs ul").each(function(i) {
        jQuery(this).addClass('dropDown');
    });
    /* PAGE LOADER */
    jQuery(window).load(function() {
        jQuery('#loader').fadeOut(1500);
    });
    jQuery('#s').attr('placeholder', 'Search and hit enter...');
    //-------------------- End Go Up --------------------//
});
/* ]]> */