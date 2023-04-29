<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";
	include "./header.php";
	include "./nav-menu.php";
	createNavMenu('');
	function returnProduct($resultConntection, $limitProd){?>
		<div class="product-page__wrapper">
			<div class="product-page__btn-back">
				<img src="./style/img/back.svg" alt="">
				<span>Назад</span>
			</div>
			<div class="product-page__information__wrapper">
				<div class="product-page__information__img__wrapper">
					<div class="product-page__information__img__main__wrapper">
						<div class="product-page__information__img__main"></div>
					</div>
					<div class="product-page__information__img__additional__wrapper">
						<div class="product-page__information__img__additional__btn-left"></div>
						<div class="product-page__information__img__additional"></div>
						<div class="product-page__information__img__additional__btn-right"></div>
					</div>
				</div>
				<div class="product-page__information__description__wrapper">
					<div class="product-page__information__description__title__wrapper">
						<div class="product-page__information__description__title"></div>
						<div class="product-page__information__description__price"></div>
					</div>
					<div class="product-page__information__description__reviews__wrapper">
						<div class="product-page__information__description__reviews__score"></div>
						<div class="product-page__information__description__reviews__value"></div>
					</div>
					<div class="product-page__information__description__text__wrapper">
						<p class="product-page__information__description__text"></p>
					</div>
					<div class="product-page__information__description__quantity__wrapper">
						<div class="product-page__information__description__quantity__title"></div>
						<div class="product-page__information__description__quantity__value__wrapper">
							<div class="product-page__information__description__quantity__btn-min"></div>
							<div class="product-page__information__description__quantity__value"></div>
							<div class="product-page__information__description__quantity__btn-max"></div>
						</div>
					</div>
					<div class="product-page__information__description__btn-buy"></div>
				</div>
				<div class="product-page__information__specifications__wrapper">
					<div class="product-page__information__specifications__title__wrapper">
						<div class="product-page__information__specifications__title"></div>
					</div>
					<div class="product-page__information__specifications__description__wrapper">
						<p class="product-page__information__specifications__description__text"></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<?php
			}
		?>
	
	<section class="product-page">
			<?php returnProduct($resultConntection, 10); ?>
	</section>
<?php 
		include "./footer.php";
		include "./server/connectScript.php"
?>