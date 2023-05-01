<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";
	include "./header.php";
	include "./nav-menu.php";
	createNavMenu('');
	function returnProduct($resultConntection){
		$pageCatalog = $_GET['page'];
		$idProduct = $_GET['product'];
		$product = mysqli_query($resultConntection,"SELECT * FROM `shop__product` WHERE `id__product`=$idProduct");
		$infoProduct = mysqli_fetch_assoc($product);
		$productDescription = mysqli_query($resultConntection,"SELECT * FROM `shop__description` WHERE `id__product`=$idProduct");
		$infoProductDescription = mysqli_fetch_assoc($productDescription);
		?>
		<div class="product-page__wrapper">
			<div class="product-page__btn-back">
				<img src="./style/img/back.svg" class = "product-page__btn-back__img"alt="">
				<a href="http://shop/catalog.php?page=<?php echo $pageCatalog?>">Назад</a>
			</div>
			<div class="product-page__information__wrapper">
				<div class="product-page__information__img__wrapper">
					<div class="product-page__information__img__main__wrapper">
						<div class="product-page__information__img__main"
						style="background: center / 70% url(<?php echo $infoProduct["img__product"];?>) no-repeat"
						></div>
					</div>
					<div class="product-page__information__img__additional__wrapper">
						<div class="product-page__information__img__additional__btn-left">
							<img src="./style/img/photo__btn-l.svg" alt="" srcset="">
						</div>
						<div class="product-page__information__img__additional__container">
							<div class="product-page__information__img__additional product-page__information__img__additional-active" 
							data-value = "1">
								<img src="<?php echo $infoProduct["img__product"];?>" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional" data-value = "2">
								<img src="./style/img/product/armchair/armchair2.jpg" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional" data-value = "3">
								<img src="./style/img/product/armchair/armchair3.jpg" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional" data-value = "4">
								<img src="./style/img/product/armchair/armchair4.jpg" alt="" srcset="">
							</div>
						</div>
						<div class="product-page__information__img__additional__btn-right">
							<img src="./style/img/photo__btn-r.svg" alt="" srcset="">
						</div>
					</div>
				</div>
				<div class="product-page__information__description__wrapper">
					<div class="product-page__information__description__title__wrapper">
						<div class="product-page__information__description__title">
							<span><?php echo $infoProduct["name__product"];?></span></div>
						<div class="product-page__information__description__price"> 
							<span><?php echo $infoProduct["price__product"];?>&#8381;</span></div>
					</div>
					<div class="product-page__information__description__reviews__wrapper">
						<div class="product-page__information__description__reviews__score">5 звезд</div>
						<div class="product-page__information__description__reviews__value"><span>13 отзывов</span></div>
					</div>
					<div class="product-page__information__description__text__wrapper">
						<p class="product-page__information__description__text"><?php echo $infoProductDescription["description__product"] ?></p>
					</div>
					<div class="product-page__information__description__quantity__wrapper">
						<div class="product-page__information__description__quantity__title">Количество:</div>
						<div class="product-page__information__description__quantity__value__wrapper">
							<div class="product-page__information__description__quantity__btn-min">
								<img src="./style/img/total__btn-min.svg" alt="" srcset="">
							</div>
							<div class="product-page__information__description__quantity__value"
							data-maxValue="<?php echo $infoProduct['count__product']?>"
							>
								<span> 0 </span>
							</div>
							<div class="product-page__information__description__quantity__btn-max">
								<img src="./style/img/total__btn-max.svg" alt="" srcset="">
							</div>
						</div>
					</div>
					<div class="product-page__information__description__btn-buy">
						Добавить в корзину
					</div>
				</div>
			</div>
			<div class="product-page__specifications__wrapper">
					<div class="product-page__specifications__title__wrapper">
						<div class="product-page__specifications__title-active product-page__specifications__title__1">
							<span>Характеристики товара</span>	
						</div>
						<div class="product-page__specifications__title product-page__specifications__title__2">
							<span>Отзывы</span>
						</div>
					</div>
					<div class="product-page__specifications__description__wrapper">
						<div class="product-page__specifications__description__text-active product-page__specifications__description__text__1">
							<p>Материал изделия: <?php echo $infoProduct["material__product"];?></p>
							<p>Страна производитель: <?php echo $infoProduct["country__product"];?></p>
						</div>
						<div class="product-page__specifications__description__text product-page__specifications__description__text__2">
							<p>Пока здесь нет отзывов</p>
						</div>
					</div>
			</div>
		</div>
		
		
		<?php
			}
		?>
	
	<section class="product-page">
			<?php returnProduct($resultConntection); ?>
	</section>
	<?php 
		include "./server/addToCart.php";
		include "./footer.php";
	?>
		<script src="./js/product-pageSpecWidth.js"></script>
		<script src="./js/product-pageSpecHide.js"></script>
		<script src="./js/product-pageChangeValue.js"></script>
		<script src="./js/product-pageChangePhoto.js"></script>
		<script src="./js/product-pageBackPage.js"></script>
		<script src="./js/addProductToCart.js"></script>
	<?php
		mysqli_close($resultConntection);
		include "./server/connectScript.php"
	?>