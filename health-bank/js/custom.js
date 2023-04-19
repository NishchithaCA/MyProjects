$(document).ready(function(){

    "use strict";
    /*==============================================================
   // toggler js
   ==============================================================*/
   
   $("button.navbar-toggler").on('click', function(){
       $(".main-menu-area").addClass("active");
       $(".mm-fullscreen-bg").addClass("active");
       $("body").addClass("hidden");
   });
   
   $(".close-box").on('click', function(){
       $(".main-menu-area").removeClass("active");
       $(".mm-fullscreen-bg").removeClass("active");
       $("body").removeClass("hidden");
   });
   
   $(".mm-fullscreen-bg").on('click', function(){
       $(".main-menu-area").removeClass("active");
       $(".mm-fullscreen-bg").removeClass("active");
       $("body").removeClass("hidden");
   });
   
   /*==============================================================
     Newsletter Popup
   ==============================================================*/
   $('#myModal1').modal('show');
   
   /*==============================================================
   // cart js
   ==============================================================*/
   
   $(".shopping-cart a.cart-count").on('click', function(){
       $(".mini-cart").addClass("show");
       $(".mm-fullscreen-bg").addClass("active");
       $("body").addClass("hidden");
   });
   
   $(".shopping-cart-close").on('click', function(){
       $(".mini-cart").removeClass("show");
       $(".mm-fullscreen-bg").removeClass("active");
       $("body").removeClass("hidden");
   });
   
   $(".mm-fullscreen-bg").on('click', function(){
       $(".mini-cart").removeClass("show");
       $(".mm-fullscreen-bg").removeClass("active");
       $("body").removeClass("hidden");
   });
   
   /*==============================================================
   // header sticky
   ==============================================================*/
     $(window).scroll(function() {
       var sticky = $('.header-main-area'),
       scroll = $(window).scrollTop();
       if (scroll >= 150) {
         sticky.addClass('is-sticky');
       }
       else {
         sticky.removeClass('is-sticky');
       }
     });
     
   
   
   /*==============================================================
   // home slider
   ==============================================================*/
   
   $('.home-slider').owlCarousel({
       loop:  true,
       items: 1,
       margin: 0,
       nav: true,
       navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
       autoplay: true,
       autoplayTimeout: 2500,
       autoplayHoverPause: true,
       fade: true,
       transitionStyle: "fade",
       animateOut: 'fadeOut',
       animateIn: 'fadeIn'
   });
   
   $('.home-slider2').owlCarousel({
       loop: true,
       items: 1,
       margin: 0,
       nav: true,
       navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
       autoplay: true,
       autoplayTimeout: 2000,
       autoplayHoverPause: true,
       fade: true,
       transitionStyle: "fade",
       animateOut: 'fadeOut',
       animateIn: 'fadeIn'
   });
   
   /*==============================================================
   // category image slider
   ==============================================================*/
   $('#screen-slider').owlCarousel({
    items:4,
    loop:true,
    margin:30,
    dots:false,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0: {
            items: 1,
        },
        576: {
            items: 3,
        },
        1400: {
            items: 4,
        }
    }
})
 
   $('.home-category').owlCarousel({
       loop: true,
       margin: 30,
       nav: true,
       navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
       autoplay: true,
       autoplayTimeout: 3000,
       dots: false,
       responsive: {
           0: {
               items: 3,
               margin: 15
           },
           479: {
               items: 3,
               margin: 15
           },
           768: {
               items: 4
           },
           979: {
               items: 6
           },
           1199: {
               items: 6
           }
       }
   });
   
   /*==============================================================
   // trending products slider
   ==============================================================*/
   
   $('#screen-slider-test').owlCarousel({
       loop: false,
       rewind: true,
       margin: 30,
       nav: true,
       navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
       autoplay: true,
       autoplayTimeout: 2000,
       dots: false,
       responsive: {
           0: {
               items: 1,
               margin: 15
           },
           600: {
               items: 3
           },
           1000: {
               items: 4
           }
       }
   });
   
   $('.video-play-btn').on('click', function(e){
    e.preventDefault();
    $('.video-overlay').addClass('open');
    $(".video-overlay").append('<iframe width="60%" height="60%" src="https://www.youtube.com/embed/21mpGLef_jY?version=3&loop=1&autoplay=1&modestbranding=0&showinfo=0&rel=0&end=78" frameborder="0" allowfullscreen></iframe>');
    /* Replace Your video Link */
});

$('.video-overlay, .video-overlay-close').on('click', function(e){
    e.preventDefault();
    close_video();
});

$(document).keyup(function(e){
    if(e.keyCode === 27) { close_video().click; }
});

function close_video() {
    $('.video-overlay.open').removeClass('open').find('iframe').remove();
};

   
});
(function ($) {
    "use strict";





    /*
    |----------------------------------------------------------------------------
    | FOR PRELOADER
    |----------------------------------------------------------------------------
    */
    $("#status").fadeOut();
    $("#preloader").delay(350).fadeOut("slow");
    $("body").delay(350).css({ "overflow": "visible" });




    /*
    |----------------------------------------------------------------------------
    | FOR TESTIMONIAL SLIDER
    |----------------------------------------------------------------------------
    */
    $('#screen-slider').owlCarousel({
        items:4,
        loop:true,
        margin:30,
        dots:false,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            1400: {
                items: 4,
            }
        }
    })




    /*
    |----------------------------------------------------------------------------
    | FOR TESTIMONIAL SLIDER
    |----------------------------------------------------------------------------
    */
    $('#testimonial-slider').owlCarousel({
        items:1,
        loop:true,
        margin:30,
        dots:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })




    /*
    |----------------------------------------------------------------------------
    | FOR VIDEO
    |----------------------------------------------------------------------------
    */
    $('.video-play-btn').on('click', function(e){
        e.preventDefault();
        $('.video-overlay').addClass('open');
        $(".video-overlay").append('<iframe width="60%" height="60%" src="https://www.youtube.com/embed/21mpGLef_jY?version=3&loop=1&autoplay=1&modestbranding=0&showinfo=0&rel=0&end=78" frameborder="0" allowfullscreen></iframe>');
        /* Replace Your video Link */
    });

    $('.video-overlay, .video-overlay-close').on('click', function(e){
        e.preventDefault();
        close_video();
    });

    $(document).keyup(function(e){
        if(e.keyCode === 27) { close_video().click; }
    });

    function close_video() {
        $('.video-overlay.open').removeClass('open').find('iframe').remove();
    };




    /*
    |----------------------------------------------------------------------------
    | FOR SUBSCRIVE
    |----------------------------------------------------------------------------
    */
    $('#mc-form').ajaxChimp({
        url: 'https://xyz.us15.list-manage.com/subscribe/post?u=a26d8d38db8b11ffd3352f889&amp;id=d60b8b0444'
            /* Replace Your AjaxChimp Subscription Link */
    });




    /*
    |----------------------------------------------------------------------------
    | FOR WOW ANIMATION
    |----------------------------------------------------------------------------
    */
    new WOW().init();







}(jQuery));