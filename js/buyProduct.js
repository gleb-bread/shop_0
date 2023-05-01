"use strict"
$(document).ready(function(){
    $('.cart__btn-buy').on('click', function(){
        $.ajax({
            url: './../server/buyProduct.php',
            success: function(response) {
                if($.parseJSON(response).result){
                    localStorage.setItem('countProdOnCart', 0);
                    let items = document.querySelectorAll('.cart__item');
                    for (let i = 0; i < items.length;i++){
                        $(items[i]).hide();
                    }
                    $('.cart__final-price').hide();
                    $('.cart__btn-buy').hide();
                    $('.cart__wrapper').append('<div class="cart__item__empy">В корзине пока ничего нет.</div>');
                    $('.header__icons__basket__count-product').text(`0`);
                    $('.header__icons__basket__count-product').hide(0);
                    $('.modal__window__message__icon__seccess').css('display','block');
                    $('.modal__window__message__text').text('Спасибо за покупку!');
                    $('.modal__window').slideDown(300);
                    setTimeout(() => {
                        $('.modal__window').slideUp(300);
                        $('.modal__window__message__icon__seccess').css('display','none');
                    },3000);
                }else {
                    $('.modal__window__message__icon__warning').css('display','block');
                    $('.modal__window__message__text').text('Что то пошло не так!');
                    $('.modal__window').slideDown(300);
                    setTimeout(() => {
                        $('.modal__window').slideUp(300);
                        $('.modal__window__message__icon__warning').css('display','none');
                    },3000);
                }
            },
        });
    });
    $('.modal__window__exit').on('click', () => {
        $('.modal__window').slideUp(300);
        $('.modal__window__message__icon__seccess').css('display','none');
        $('.modal__window__message__icon__warning').css('display','none');
    });
});