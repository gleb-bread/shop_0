"use strict"
$(document).ready(function(){
    $('.products__list__cart').on("click", (event) => {
        if(Boolean(event.target?.id)){
            let el = event.target;
            let prot = window.location.href.split('index.php')[0];
            let getVar = window.location.href.split('index.php')[1]?.split('#')[0];
            let newUrl = prot + 'product-page.php' + getVar + `?product=${el.id.split('product__')[1]}`;
            window.location.href = newUrl;
        } else {
            let el = event.target?.parentElement;
            let prot = window.location.href.split('index.php')[0];
            let getVar = window.location.href.split('index.php')[1]?.split('#')[0];
            let newUrl = prot + 'product-page.php' + getVar + `?product=${el.id.split('product__')[1]}`;
            window.location.href = newUrl;
        }
    });
});