"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let selectItem = 1;
    let valueItems = $('.product-page__information__img__additional__wrapper > div > div:last-child()').data("value");
    $('.product-page__information__img__additional__btn-left').on('click', () => {
        if (!(selectItem == 1)){
            $(`[data-value="${selectItem}"]`).removeClass('product-page__information__img__additional-active');
            selectItem--;
            $(`[data-value="${selectItem}"]`).addClass('product-page__information__img__additional-active');
            let urlImg = `url(${$(`[data-value="${selectItem}"] > img`).attr('src')})`;
            $('.product-page__information__img__main').css('background', `center / 70% ` + urlImg + ` no-repeat`);
        }
    });
    $('.product-page__information__img__additional__btn-right').on('click', () => {
        if (!(selectItem == valueItems)){
            $(`[data-value="${selectItem}"]`).removeClass('product-page__information__img__additional-active');
            selectItem++;
            $(`[data-value="${selectItem}"]`).addClass('product-page__information__img__additional-active');
            let urlImg = `url(${$(`[data-value="${selectItem}"] > img`).attr('src')})`;
            $('.product-page__information__img__main').css('background', `center / 70% ` + urlImg + ` no-repeat`);
        }
    });
});