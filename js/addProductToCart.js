$(document).ready(function(){
    if (localStorage.getItem('countProdOnCart')){
        $('.header__icons__basket__count-product').text(localStorage.getItem('countProdOnCart'));
        $('.header__icons__basket__count-product').css('display', 'flex');
    }
    $('.product-page__information__description__btn-buy').click(function(){
        let countProduct = $('.product-page__information__description__quantity__value > span').text();
        let maxCountProduct = $('.product-page__information__description__quantity__value').data('maxvalue');
        let url = './../server/addToCart.php';
        const urlGetVars = window.location.search;
        const urlParam = new URLSearchParams(urlGetVars);
        const idProduct = urlParam.get('product');
        data =  {
            'id__user': null,
            'id__product': idProduct,
            'count__product': countProduct,
        };
        if (countProduct != 0 && countProduct<= maxCountProduct){
            $.ajax({
                url: url,
                method: "POST",
                data: data,
                success: function(response) {
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                 }
            });
            $.ajax({
                url: './../server/chageCountOnCart.php',
                success: function(response) {
                    if(response != 0 && !(localStorage.getItem('countProdOnCart'))){
                        localStorage.setItem('countProdOnCart', response);
                        $('.header__icons__basket__count-product').text(`${response}`);
                        $('.header__icons__basket__count-product').show(500);
                    } else {
                        localStorage.setItem('countProdOnCart', response);
                        $('.header__icons__basket__count-product').text(localStorage.getItem('countProdOnCart'));
                    }
                },
            });
        }
    });
});