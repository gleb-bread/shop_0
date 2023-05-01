$(document).ready(function(){
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
                    alert(response);
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                 }
            });
        }
    });
});