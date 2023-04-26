"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let comments = document.querySelectorAll('.reviews__carusel__content__item');
    let btnR = document.querySelector('.reviews__carusel__btn-r');
    let btnL = document.querySelector('.reviews__carusel__btn-l');
    let btnsSelect = document.querySelectorAll('.reviews__carusel__item__btn');
    let selectIndex = 0;
    btnL.onclick = () => {
        if (selectIndex != 0){
            comments[selectIndex].style.display = "none";
            comments[selectIndex - 1].style.display = "block";
            btnsSelect[selectIndex].classList.remove('reviews__carusel__item__select');
            btnsSelect[selectIndex].classList.add('reviews__carusel__item__no-select');
            btnsSelect[selectIndex - 1].classList.remove('reviews__carusel__item__no-select');
            btnsSelect[selectIndex - 1].classList.add('reviews__carusel__item__select');
            selectIndex -= 1;
        }
    }
    btnR.onclick = () => {
        if (selectIndex != comments.length - 1){
            comments[selectIndex].style.display = "none";
            comments[selectIndex + 1].style.display = "block";
            btnsSelect[selectIndex].classList.remove('reviews__carusel__item__select');
            btnsSelect[selectIndex].classList.add('reviews__carusel__item__no-select');
            btnsSelect[selectIndex + 1].classList.remove('reviews__carusel__item__no-select');
            btnsSelect[selectIndex + 1].classList.add('reviews__carusel__item__select');
            selectIndex += 1;
        }
    }
    function opacityEl(el, valueOpacity){
        el.style.opacity = `${valueOpacity}`;
    }

  });