"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let value = $('.product-page__information__description__quantity__value > span').text();
    $('.product-page__information__description__quantity__btn-min').on('click', () => {
        if (value){
            value--;
            $('.product-page__information__description__quantity__value > span').text(value);
        }
    });
    $('.product-page__information__description__quantity__btn-max').on('click', () => {
        value++;
        $('.product-page__information__description__quantity__value > span').text(value);
    });
});