"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let comments = document.querySelectorAll('.reviews__carusel__content__item');
    let btnR = document.querySelector('.reviews__carusel__btn-r');
    let btnL = document.querySelector('.reviews__carusel__btn-l');
    let btnsSelect = document.querySelectorAll('.reviews__carusel__item__btn');
    let selectIndex = 0;
    btnL.onclick = () => {
        if (selectIndex != 0){
            comments[selectIndex].style.marginLeft = getComputedStyle(comments[selectIndex]).width;
            comments[selectIndex].style.opacity = 0;
            setTimeout(async () => {
                comments[selectIndex].style.marginLeft = 0;
                comments[selectIndex].style.display = "none";
                comments[selectIndex].style.opacity = 1;
                comments[selectIndex - 1].style.transitionDuration = 'none';
                comments[selectIndex - 1].style.opacity = 0;
                btnsSelect[selectIndex].classList.remove('reviews__carusel__item__select');
                btnsSelect[selectIndex].classList.add('reviews__carusel__item__no-select');
                btnsSelect[selectIndex - 1].classList.remove('reviews__carusel__item__no-select');
                btnsSelect[selectIndex - 1].classList.add('reviews__carusel__item__select');
                comments[selectIndex - 1].style.display = "block";
                comments[selectIndex - 1].style.opacity = 1;
                comments[selectIndex - 1].style.transitionDuration = '.3';
                selectIndex -= 1;
            },500);
        }
    }
    btnR.onclick = () => {
        if (selectIndex != comments.length - 1){
            comments[selectIndex].style.paddingRight = getComputedStyle(comments[selectIndex]).width;
            comments[selectIndex].style.opacity = 0;
            setTimeout(async () => {
                comments[selectIndex].style.paddingRight = 0;
                comments[selectIndex].style.display = "none";
                comments[selectIndex].style.opacity = 1;
                comments[selectIndex + 1].style.transitionDuration = 'none';
                comments[selectIndex + 1].style.opacity = 0;
                btnsSelect[selectIndex].classList.remove('reviews__carusel__item__select');
                btnsSelect[selectIndex].classList.add('reviews__carusel__item__no-select');
                btnsSelect[selectIndex + 1].classList.remove('reviews__carusel__item__no-select');
                btnsSelect[selectIndex + 1].classList.add('reviews__carusel__item__select');
                comments[selectIndex + 1].style.display = "block";
                comments[selectIndex + 1].style.opacity = 1;
                comments[selectIndex + 1].style.transitionDuration = '.3';
                selectIndex += 1;
            },500);
        }
    }
  });