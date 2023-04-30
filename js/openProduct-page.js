"use strict"
$(document).ready(function(){
    $(window).on("click", (event) => {
        if(Boolean(event.target.id)){
            let el = event.target;
            let prot = window.location.href.split('catalog.php')[0];
            let getVar = window.location.href.split('catalog.php')[1];
            let newUrl = prot + 'product-page.php' + getVar + `&product=${el.id.split('product__')[1]}`;
            window.location.href = newUrl;
        } else {
            let el = event.target.parentElement;
            let prot = window.location.href.split('catalog.php')[0];
            let getVar = window.location.href.split('catalog.php')[1];
            let newUrl = prot + 'product-page.php' + getVar + `&product=${el.id.split('product__')[1]}`;
            window.location.href = newUrl;
        }
    });
});