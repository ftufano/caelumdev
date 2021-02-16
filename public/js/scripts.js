/*!
    * Start Bootstrap - Agency v6.0.2 (https://startbootstrap.com/template-overviews/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($(window).width() > 992){
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
                $("#dynLogo").attr('src', 'assets/img/caelum_logo.png');
                $("#mainNav .navbar-nav .nav-item a").removeClass("ontop-nav-link");
                $("#mainNav .navbar-nav .nav-item a").addClass("nav-link");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
                $("#dynLogo").attr('src', 'assets/img/caelum_logo_white.png');
                $("#mainNav .navbar-nav .nav-item a").removeClass("nav-link");
                $("#mainNav .navbar-nav .nav-item a").addClass("ontop-nav-link");
            }
        } else {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        }
        
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Change Caelum Dev logo on scrolling

})(jQuery); // End of use strict
