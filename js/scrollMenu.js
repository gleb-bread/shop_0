"use strict"
document.addEventListener("DOMContentLoaded", () => {
    function menuBackColor() {
        let navBackColor = document.querySelector(".header__nav__wrapper");
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
    
    window.addEventListener("scroll", menuBackColor);
});