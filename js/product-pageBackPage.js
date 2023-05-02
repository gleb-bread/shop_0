"use strict"
document.addEventListener("DOMContentLoaded", () => {
    $(window).on('click', (event) => {
        if (event.target.className == "product-page__btn-back" || event.target.className == "product-page__btn-back__img"){
            const urlGetVars = window.location.search;
            const urlParam = new URLSearchParams(urlGetVars);
            const page = urlParam.get('page');
            let prot = window.location.href.split('product-page.php')[0];
            let newUrl = prot + 'catalog.php' + `?page=${page}`;
            window.location.href = newUrl;
            urlParam = null;
        }
    })
});