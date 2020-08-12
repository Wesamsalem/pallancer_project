$(document).ready(function () {
    'use strict';
    $('header nav .bars').click(function () {
        $(this).next('header nav .links-list').slideToggle();
    });
    
//// main-section slider
    $('.main-section .main-slider').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2500
    });
//// main-section slider RTL
    $('.main-section .main-slider .rtl-slider').slick({
        slidesToShow: 1,
        rtl: true,
        autoplay: true,
        autoplaySpeed: 2500
    });
    
//// about slider
    $('.about-page .main-section .about-slider').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2500
    });
    
//// about slider RTL
    $('.about-page .main-section .about-slider .rtl-slider').slick({
        slidesToShow: 1,
        rtl: true,
        autoplay: true,
        autoplaySpeed: 2500
    });
    
//// testimonial slider
    $('.testimonial-section .testimonial-slider .slides').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
//// testimonial slider RTL
    $('.testimonial-section .testimonial-slider .rtl-slides').slick({
        slidesToShow: 3,
        rtl: true,
        autoplay: true,
        autoplaySpeed: 3500,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    
  
//////// this code to know if there is div which make horizontal scroll    
//    var docWidth = document.documentElement.offsetWidth;
//
//    [].forEach.call(
//        document.querySelectorAll('*'),
//        function(el) {
//        if (el.offsetWidth > docWidth) {
//          console.log(el);
//        }
//        }
//    );
});