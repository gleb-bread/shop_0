$(document).ready(function(){
    let idItem;
    let allPriceItem;
    let idTimeout;
    let finalPrice = Number($('.cart__final-price > p:last-child()').text().split('₽')[0]);
    let btnsDelete = document.querySelectorAll('.cart__item__delete');
    for(let i = 0; i < btnsDelete.length; i++){
        $(btnsDelete[i]).on('click', (event) => {
            idItem = event.target?.parentElement.id.split('delete__')[1];
            allPriceItem = Number($(`#product__${idItem} > .cart__item__block__2 > .cart__item__all__price`).text());
            $('.modal__window__message__icon__warning').css('display','block');
            $('.modal__window__message__text').text('Вы уверены, что хотите удалить товар?');
            $('.modal__window__message__btn').css('display','block');
            $('.modal__window').slideDown(300);
        });
    }
    $('.modal__window__message__btn__yes').on('click', () => {
        $('.modal__window').slideUp();
        $('.modal__window__message__btn').css('display','none');
        $('.modal__window__message__icon__warning').css('display','none');
        let data = {
            'id__product': idItem
        }
        $.ajax({
            url: './../server/deleteProduct.php',
            method: "POST",
            data: data,
            success: function(response) {
                if($.parseJSON(response).result){
                    localStorage.setItem('countProdOnCart', localStorage.getItem('countProdOnCart') - 1);
                    if (!Number(localStorage.getItem('countProdOnCart'))){
                        $('.header__icons__basket__count-product').hide();
                    }
                    $('.header__icons__basket__count-product').text(`${localStorage.getItem('countProdOnCart')}`);
                    $('.modal__window__message__icon__seccess').css('display','block');
                    $('.modal__window__message__text').text('Товар успешно удалён!');
                    $('.modal__window').slideDown();
                    idTimeout = setTimeout(() => {
                        $('.modal__window').slideUp();
                        $('.modal__window__message__icon__seccess').css('display','none');
                    },3000);
                    $(`#product__${idItem}`).hide();
                    if (finalPrice != allPriceItem){
                        $('.cart__final-price > p:last-child()').text(`${finalPrice - allPriceItem}₽`);
                        finalPrice -= allPriceItem;
                    } else {
                        $('.cart__final-price').hide();
                        $('.cart__btn-buy').hide();
                        $('.cart__wrapper').append('<div class="cart__item__empy">В корзине пока ничего нет.</div>');
                    }
                }else {
                    $('.modal__window__message__icon__warning').css('display','block');
                    $('.modal__window__message__text').text('Что то пошло не так');
                    $('.modal__window').slideDown();
                    idTimeout = setTimeout(() => {
                        $('.modal__window').slideUp();
                        $('.modal__window__message__icon__warning').css('display','none');
                    },3000);
                }
            },
        });
    });
    $('.modal__window__exit').on('click', () => {
        $('.modal__window').slideUp();
        clearTimeout(idTimeout);
        $('.modal__window__message__icon__seccess').css('display','none');
        $('.modal__window__message__icon__warning').css('display','none');
        $('.modal__window__message__btn').css('display','none');
    });
});