"use strict"
document.addEventListener("DOMContentLoaded", () => {
    $('.catalog__filter__categories__cart').on('click', function(ev){
        let el = Boolean(ev.target?.parentElement?.id) ? ev.target?.parentElement?.id : ev.target?.parentElement?.parentElement?.id;
        let idCategor = el.split('categories__btn__')[1];
        const urlGetVars = window.location.search;
        let urlParam = new URLSearchParams(urlGetVars);
        urlParam.set('categories', idCategor);
        const newUrl = window.location.origin + window.location.pathname + '?' + urlParam.toString();
        window.location.href = newUrl;
    });
});