<?php
	include "./server/connectionDB.php";
	include "./header.php";
	include "./nav-menu.php";
?>
<section class="cart">
<div class="cart__wrapper">
    <div class="cart__wrapper">
        <div class="cart__item__title">
            <div class="cart__item__block__1">
                <div class="cart__item__icon"></div>
                <div class="cart__item__name">Наименнование</div>
                <div class="cart__item__price">Цена за шт.</div>
            </div>
            <div class="cart__item__block__2">
                <div class="cart__item__count">Кол-во</div>
                <div class="cart__item__all__price">Сумма</div>
            </div>
        </div>
        <div class="cart__item">
            <div class="cart__item__block__1">
                <div class="cart__item__icon">
                    <img src="./style/img/product/sofa/sofa5.jpg" alt="">
                </div>
                <div class="cart__item__name">Кресло креслое</div>
                <div class="cart__item__price">2000</div>
            </div>
            <div class="cart__item__block__2">
                <div class="cart__item__count">5</div>
                <div class="cart__item__all__price">10000</div>
            </div>
        </div>
        
        <div class="cart__final-price">
            <p>Итого:</p>
            <p>100000&#8381;</p>
        </div>
        <div class="cart__btn-buy__wrapper">
            <div class="cart__btn-buy">Оплатить</div> 
        </div>
    </div>
</section>
<?php
    include "./footer.php";
    include "./server/connectScript.php"
?>