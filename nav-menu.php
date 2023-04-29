<?php function createNavMenu($navMenuClass) {?>
    <div class="header__nav__wrapper <?php echo $navMenuClass ?>">
        <nav class="header__nav">
            <ul class="header__nav__menu">
                <li class="header__nav__menu__item">
                    <a href="./catalog.php?page=0" class="header__nav__menu__link">Каталог</a>
                </li>
                <li class="header__nav__menu__item">
                    <a href="" class="header__nav__menu__link">Скидки</a>
                </li>
                <li class="header__nav__menu__item">
                    <a href="#" class="header__nav__menu__link">О нас</a>
                </li>
                <li li class="header__nav__menu__item">
                    <a href="#footer" class="header__nav__menu__link">Контакты</a>
                </li>
            </ul>
        </nav>

        <div class="header__logo">
            <img src="./style/img/header__logo-w.png" alt="Logo" class="header__logo__png">
        </div>
        <div class="header__right-block">
            <div class="header__search__form">
                <form action="">
                    <div class="header__search__wrapper">
                        <div class="header__search__btn">
                            <img src="./style/img/header__search__btn.svg" alt="Button search">
                        </div>
                        <input type="text" class="header__search__input" placeholder="Поиск"
                            autocomplete="off">
                    </div>
                </form>
            </div>

            <div class="header__icons">
                <div class="header__icons__wrapper">
                    <div class="header__icons__user">
                        <img src="./style/img/header__user.svg" alt="Icon user">
                    </div>
                    <div class="header__icons__basket">
                        <img src="./style/img/header__basket.svg" alt="Icon basket">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>