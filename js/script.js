$ = jQuery.noConflict();

$(function ($) {
    "use strict";
    //LOADER
    $(window).on("load", function () {
        $(".loader").fadeOut(800);
    });

    /* ------- Smooth scroll ------- */
    $(".scroll").on("click", function (event) {
        var menu = $("nav.navbar").innerHeight();
        event.preventDefault();
        $("html,body").animate({
            scrollTop: ($(this.hash).offset().top - 10)
        }, 1000);
    });
	
	
	/*-------------------------------------------------------------------*/
    /*  Makes the height of all selected elements (".match-height")
    /*  exactly equal. Requires jQuery matchHeight plugin.
    /*-------------------------------------------------------------------*/
    if ($.fn.matchHeight){
        $('.match-height').matchHeight();
    }

    /* ------- Sidebar Toggle ------ */
    $(".menu-icon").on("click",function () {
        $(".full-menu").toggleClass("open");
    });
    if($(".full-nav li a").hasClass("scroll")){
        $(".full-nav li a").on("click",function () {
            $(".full-menu").removeClass("open");
        });
    }

    
    /*------ MENU Fixed ------*/

    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }


    });

    // Push Menus
    var $menuLeft = $(".pushmenu-left");
    var $menuRight = $(".pushmenu-right");
    var $toggleleft = $("open");
    var $toggleright = $(".home-main-index5  .menu-icon");

    if ($(".home-main-index5  .menu-icon").length) {
        $("body").addClass("pushmenu-push");
        $toggleleft.on("click", function () {
            $(this).toggleClass("active");
            $(".pushmenu-push").toggleClass("pushmenu-push-toright");
            $menuLeft.toggleClass("pushmenu-open");
            return false;
        });
        $toggleright.on("click", function () {
            $(this).toggleClass("active");
            $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
            $menuRight.toggleClass("pushmenu-open");
            return false;

        });


    } 
});