"use strict"
$(document).ready(function(){
        if ($('.header__nav__wrapper-main')[0]){
        $(window).on('scroll', function() {
            if(pageYOffset >= 100){
                $('.header__nav__wrapper-main')[0].animate({'background': 'rgba(0,0,0, .5)'}, 1000);
            }
            if(pageYOffset <= 100){
                $('.header__nav__wrapper-main')[0].animate({'background': 'rgba(0,0,0, 0)'}, 1000);
            }
        });
    } else {
        $('.header__nav__wrapper').css('background', 'rgba(0,0,0, .5)');
    }
  });