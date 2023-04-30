"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let btn1 = $('.product-page__specifications__title__1');
    let btn2 = $('.product-page__specifications__title__2');
    let statusBtns = {
        btn1: true,
        btn2: false
    };
    $('.product-page__specifications__title__1').on('click', () => {
        if (!statusBtns.btn1){
            btn2.removeClass("product-page__specifications__title-active").addClass("product-page__specifications__title");
            btn1.removeClass("product-page__specifications__title").addClass("product-page__specifications__title-active");
            $('.product-page__specifications__description__text__1').toggle(300);
            $('.product-page__specifications__description__text__2').toggle(300);
            statusBtns.btn1 = true;
            statusBtns.btn2 = false;
        }
    });
    $('.product-page__specifications__title__2').on('click', () => {
        if (!statusBtns.btn2){
            btn1.removeClass("product-page__specifications__title-active").addClass("product-page__specifications__title");
            btn2.removeClass("product-page__specifications__title").addClass("product-page__specifications__title-active");
            $('.product-page__specifications__description__text__1').toggle(300);
            $('.product-page__specifications__description__text__2').toggle(300);
            statusBtns.btn2 = true;
            statusBtns.btn1 = false;
        }
    });
});