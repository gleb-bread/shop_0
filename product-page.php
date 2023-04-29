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
				<a>Назад</a>
			</div>
			<div class="product-page__information__wrapper">
				<div class="product-page__information__img__wrapper">
					<div class="product-page__information__img__main__wrapper">
						<div class="product-page__information__img__main"></div>
					</div>
					<div class="product-page__information__img__additional__wrapper">
						<div class="product-page__information__img__additional__btn-left">
							<img src="./style/img/photo__btn-l.svg" alt="" srcset="">
						</div>
						<div class="product-page__information__img__additional__container">
							<div class="product-page__information__img__additional">
								<img src="./style/img/product/armchair/armchair1.jpg" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional">
								<img src="./style/img/product/armchair/armchair1.jpg" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional">
								<img src="./style/img/product/armchair/armchair1.jpg" alt="" srcset="">
							</div>
							<div class="product-page__information__img__additional">
								<img src="./style/img/product/armchair/armchair1.jpg" alt="" srcset="">
							</div>
						</div>
						<div class="product-page__information__img__additional__btn-right">
							<img src="./style/img/photo__btn-r.svg" alt="" srcset="">
						</div>
					</div>
				</div>
				<div class="product-page__information__description__wrapper">
					<div class="product-page__information__description__title__wrapper">
						<div class="product-page__information__description__title">Кресло креслое</div>
						<div class="product-page__information__description__price">15000</div>
					</div>
					<div class="product-page__information__description__reviews__wrapper">
						<div class="product-page__information__description__reviews__score">5 звезд</div>
						<div class="product-page__information__description__reviews__value">13 отзывов</div>
					</div>
					<div class="product-page__information__description__text__wrapper">
						<p class="product-page__information__description__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sint, veritatis pariatur atque impedit aspernatur culpa accusamus dolorem magnam doloribus? Aperiam, reprehenderit tenetur repellendus natus dolorum maiores fugit voluptatum culpa officia eos laudantium minima, totam nobis obcaecati rerum, quas magni voluptas cum. Perspiciatis quis illo mollitia consectetur, quos eum consequuntur.</p>
					</div>
					<div class="product-page__information__description__quantity__wrapper">
						<div class="product-page__information__description__quantity__title">Количество</div>
						<div class="product-page__information__description__quantity__value__wrapper">
							<div class="product-page__information__description__quantity__btn-min">
								<img src="./style/img/total__btn-min.svg" alt="" srcset="">
							</div>
							<div class="product-page__information__description__quantity__value">
								<span> 0 </span>
							</div>
							<div class="product-page__information__description__quantity__btn-max">
								<img src="./style/img/total__btn-max.svg" alt="" srcset="">
							</div>
						</div>
					</div>
					<div class="product-page__information__description__btn-buy"></div>
				</div>
			</div>
			<div class="product-page__specifications__wrapper">
					<div class="product-page__specifications__title__wrapper">
						<div class="product-page__specifications__title"></div>
					</div>
					<div class="product-page__specifications__description__wrapper">
						<p class="product-page__specifications__description__text"></p>
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