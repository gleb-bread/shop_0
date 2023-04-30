"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let widthBlock = $('.product-page__information__img__wrapper').width();
    $('.product-page__specifications__wrapper').css('width', widthBlock + 'px');
});