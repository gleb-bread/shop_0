<?php
	include './server/connectionDB.php';
	include './header.php';
	include './nav-menu.php';
    $idSession = $_COOKIE['id__session'];
    $getInfoCart = mysqli_query($resultConntection, "SELECT * FROM `shop__cart` WHERE 
    `id__session`='$idSession'");
    $countItems = 0;
    $countPrice = 0;
?>
<section class="cart">
<div class="cart__wrapper__container">
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
        <?php while($infoCartItem = mysqli_fetch_assoc($getInfoCart)){?>
        <div class="cart__item">
            <div class="cart__item__block__1">
                <div class="cart__item__icon">
                    <img src="<?php
                        $idProduct =  $infoCartItem['id__product'];
                        $queryImgProduct =  mysqli_query($resultConntection, "SELECT `img__product` FROM `shop__product` 
                        WHERE `id__product`='$idProduct'");
                        $imgProduct = mysqli_fetch_array($queryImgProduct);
                        echo $imgProduct['img__product'];
                    ?>" alt="">
                </div>
                <div class="cart__item__name"><?php
                        $idProduct =  $infoCartItem['id__product'];
                        $queryNameProduct = mysqli_query($resultConntection, "SELECT `name__product` FROM `shop__product` 
                        WHERE `id__product`='$idProduct'");
                        $nameProduct = mysqli_fetch_array($queryNameProduct);
                        echo $nameProduct['name__product'];
                    ?></div>
                <div class="cart__item__price"><?php
                        $idProduct =  $infoCartItem['id__product'];
                        $queryPriceProduct =  mysqli_query($resultConntection, "SELECT `price__product` FROM `shop__product` 
                        WHERE `id__product`='$idProduct'");
                        $priceProduct = mysqli_fetch_array($queryPriceProduct);
                        echo $priceProduct['price__product'];
                    ?>&#8381;</div>
            </div>
            <div class="cart__item__block__2">
                <div class="cart__item__count"><?php echo $infoCartItem['count__product']?></div>
                <div class="cart__item__all__price"><?php echo (
                    $infoCartItem['count__product']  * $priceProduct['price__product']);
                    $countPrice += $infoCartItem['count__product']  * $priceProduct['price__product'];
                    ?></div>
            </div>
        </div>
        <?php 
            $countItems += 1;
        }
            if ($countItems != 0) {
        ?>

        <div class="cart__final-price">
            <p>Итого:</p>
            <p><?php echo $countPrice;?>&#8381;</p>
        </div>
        <div class="cart__btn-buy__wrapper">
            <div class="cart__btn-buy">Оплатить</div> 
        </div>
        <?php }
         else {
        ?>
            <div class="cart__item__empy">В корзине пока ничего нет.</div> 
        <?php }?>
        <div class="modal__window">
            <div class="modal__window__wrapper">
                <div class="modal__window__exit">
                    <img src="./style/img/exit.svg" alt="" srcset="">
                </div>
                <div class="modal__window__message">
                    <div class="modal__window__message__icon">
                        <div class="modal__window__message__icon__seccess">
                            <img src="./style/img/success.svg" alt="" srcset="">
                        </div>
                        <div class="modal__window__message__icon__warning">
                            <img src="./style/img/warning.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="modal__window__message__text"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include "./footer.php";
?>
    <script src="./js/buyProduct.js"></script>
<?php
    include "./server/connectScript.php"
?>