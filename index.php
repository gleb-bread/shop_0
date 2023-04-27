<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";

	$infoDB = mysqli_query($resultConntection, "SELECT * FROM `shop__categories`");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="./style/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Unbounded:wght@200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<title>Shop</title>
</head>

<body>
	<header>
		<div class="header__wrapper">
			<div class="header__filter">
				<div class="header__nav__wrapper">
					<nav class="header__nav">
						<ul class="header__nav__menu">
							<li class="header__nav__menu__item">
								<a href="" class="header__nav__menu__link">Каталог</a>
							</li>
							<li class="header__nav__menu__item">
								<a href="" class="header__nav__menu__link">Скидки</a>
							</li>
							<li class="header__nav__menu__item">
								<a href="" class="header__nav__menu__link">О нас</a>
							</li>
							<li li class="header__nav__menu__item">
								<a href="" class="header__nav__menu__link">Контакты</a>
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
				<div class="header__main">
					<div class="header__main__wrapper">
						<div class="header__main__text__wrapper">
							<div class="header__main__text">
								<h3 class="header__main__text__title">Новая коллекция</h3>
								<h2 class="header__main__text__name">Light Summer</h2>
								<br class="header__main__text__description">
								Позвольте солнцу проникнуть в ваш дом с коллекцией мебели Light Summer,<br />
								которая наполнит его светом и теплом, создавая при этом атмосферу безмятежности и
								уюта
								</p>
							</div>
							<div class="header__main__links">
								<div class="header__main__links__items">
									<a href="#" class="header__main__links__item__link">
										<img src="./style/img/facebook.svg" alt="Icon facebook"
											class="header__main__links__item__link__svg">
									</a>
									<a href="#" class="header__main__links__item__link">
										<img src="./style/img/instagram.svg" alt="Icon instagram"
											class="header__main__links__item__link__svg">
									</a>
									<a href="#" class="header__main__links__item__link">
										<img src="./style/img/snapchat.svg" alt="Icon snapchat"
											class="header__main__links__item__link__svg">
									</a>
									<a href="#" class="header__main__links__item__link">
										<img src="./style/img/twitter.svg" alt="Icon twitter"
											class="header__main__links__item__link__svg">
									</a>
									<a href="#" class="header__main__links__item__link">
										<img src="./style/img/yelp.svg" alt="yelp"
											class="header__main__links__item__link__svg">
									</a>
								</div>
							</div>
						</div>
						<div class="header__main__btn-buy">
							<div class="header__main__btn-buy__icon">
								<img src="./style/img/header__basket.svg" alt="Icon basket">
							</div>
							<span class="header__main__btn-buy__text">Купить сейчас</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="categories">
		<div class="categories__wrapper">
			<?php  while($categories = mysqli_fetch_assoc($infoDB)) {?>
			<div class="categories__icon" style="
				background: url('<?php echo $categories['img__categories']?>');
				background-size: 100%;
				background-position: center;
				background-repeat: no-repeat;
				background-color: #F8F8FF;
				cursor: pointer;">
				<span class="categories__icon__name"><?php echo $categories['name__categories']?></span>
			</div>
			<?php }?>
		</div>
	</section>
	<section class="about-us">
		<div class="about-us__wrapper">
			<div class="about-us__img">
			</div>
			<div class="about-us__text">
				<h3 class="about-us__text__title">
					Немного о
				</h3>
				<h2 class="about-us__text__name">
					Ligth Summer
				</h2>
				<p class="about-us__text__description">Мебельная коллекция Light Summer - это легкая и воздушная серия
					мебели, созданная специально для тех, кто любит лето и светлые цвета. Эта коллекция состоит из
					нескольких предметов мебели, которые прекрасно дополнят любой интерьер и придадут ему неповторимый
					летний стиль.

					Основным материалом, использованным в коллекции, является натуральное дерево, которое придает мебели
					естественность и уютность. Вся мебель выполнена в светлых тонах, таких как белый, бежевый и
					светло-серый, что создает атмосферу света и пространства.</p>
				<div class="about-us__text__btn">
					Подробнее
				</div>
			</div>
		</div>
	</section>
	<section class="products">
		<div class="products__wrapper">
			<div class="products__title">
				<h3>Топ продаж</h3>
			</div>
			<div class="products__list">
				<?php  
					$count = 1;
					$selectId = array(0,7,14,21,28,35);
					for($i = 0; $i < 8; $i++) {
						$indx = $selectId[$count - 1];
						$product = mysqli_query($resultConntection, "SELECT * FROM `shop__product` WHERE `id__categories`=$count AND `id__product`>$indx  LIMIT 1");
						$bestProduct = mysqli_fetch_assoc($product);
						$selectId[$count - 1] += 1;
						$count += 1;
						if ($count == 7){
							$count = 1;
						}
					?>
					<div class="products__list__cart">
						<div class="products__list__cart__icon" style="
							background: url('<?php echo $bestProduct['img__product'];?>');
							background-size: 100%;
							background-position: center;
							background-repeat: no-repeat;
						">
						</div>
						<div class="products__list__cart__name">
							<span><?php echo $bestProduct['name__product'];?></span>
						</div>
						<div class="products__list__cart__country">
							<span><?php echo $bestProduct['country__product']?></span>
						</div>
						<div class="products__list__cart__price">
							<?php echo $bestProduct['price__product']?>&#8381;
						</div>
					</div>
				<?php  }?>
			</div>
		</div>
	</section>
	<!-- <section class="reviews">
		<div class="reviews__wrapper">
			<div class="reviews__title-s">
				<h3>Отзывы</h3>
			</div>
			<div class="reviews__title-b">
				<h2>От некоторых наших клиентов</h2>
			</div>
			<div class="reviews__carusel__wrapper">
				<div class="reviews__carusel__btn-l">
					<svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10 1L1.5 9.5L10 18" stroke="#7A0007" stroke-width="2" />
					</svg>
				</div>
				<div class="reviews__carusel__content">
					<div class="reviews__carusel__content__wrapper">
						<div class="reviews__carusel__content__item reviews__carusel__content__item-1">
							<div class="reviews__carusel__content__item__description">
								Я приобрела мебельную коллекцию Summer Light и осталась очень довольна своей покупкой!
								Мне нравится современный дизайн каждого элемента, что придает моей комнате свежий и
								яркий вид.

								Очень понравилось, что мебель изготовлена из высококачественных материалов, что делает
								ее такой прочной и долговечной. Теперь я не боюсь, что что-то сломается или повредится.

								Коллекция Summer Light была очень удобна для использования. Я могу легко перемещать
								столы, стулья и диваны, что облегчает уборку комнаты и перестановку вещей по моему
								вкусу.

								В целом, я очень довольна своей покупкой в мебельной коллекции Summer Light. Это
								отличный выбор для всех, кто хочет добавить уюта и стиля в свой дом!
							</div>
							<div class="reviews__carusel__content__item__name">Ирина Иванова</div>
							<div class="reviews__carusel__content__item__location">Россия, Иркутск</div>
						</div>
						<div class="reviews__carusel__content__item reviews__carusel__content__item-2">
							<div class="reviews__carusel__content__item__description">
								Купил себе кресло из мебельной коллекции Summer Light и остался очень доволен покупкой!
								Кресло удобное и стильное, сидеть в нем практически возводит тебя в царство комфорта и
								спокойствия. Материалы, используемые для изготовления кресла, высокого качества и
								усиливают чувство комфорта. Рекомендую всем, кто ищет уютные и привлекательные кресла!
							</div>
							<div class="reviews__carusel__content__item__name">Антон Иванов</div>
							<div class="reviews__carusel__content__item__location">Россия, Питер</div>
						</div>
						<div class="reviews__carusel__content__item reviews__carusel__content__item-3">
							<div class="reviews__carusel__content__item__description">
								Приобрела в мебельную коллекцию Summer Light стол и стулья и не могу налюбоваться на эти
								красивые предметы мебели! Дизайн каждого элемента уникален, что делает мою комнату
								уютней и ярче, а материалы создают ощущение свежести. Я довольна своей покупкой и
								советую всем, кто ищет красивые и вместительные столы со стульями.
							</div>
							<div class="reviews__carusel__content__item__name">Екатирина Иванова</div>
							<div class="reviews__carusel__content__item__location">Россия, Москва</div>
						</div>
					</div>
				</div>
				<div class="reviews__carusel__btn-r">
					<svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L9.5 9.5L1 18" stroke="#7A0007" stroke-width="2" />
					</svg>
				</div>
			</div>
			<div class="reviews__carusel__items">
				<div class="reviews__carusel__item__btn reviews__carusel__item__select"></div>
				<div class="reviews__carusel__item__btn reviews__carusel__item__no-select"></div>
				<div class="reviews__carusel__item__btn reviews__carusel__item__no-select"></div>
			</div>
		</div>
	</section> -->
	<footer>
		<div class="footer__wrapper">
			<div class="footer__filter">
				<div class="footer__lists">
					<div class="footer__list__info">
						<div class="footer__list__info__logo">
							<img src="./style/img/header__logo-w.png" alt="">
						</div>
						<div class="footer__list__info__daily__wrapper">
							<div class="footer__list__info__daily__info">
								<span>Открыто 24|7</span>
							</div>
							<div class="footer__list__info__delivery__info">
								<span>Доставка 24|7</span>
							</div>
						</div>
						<div class="footer__list__info__links__wrapper">
							<div class="footer__list__info__item">
								<a href="" class="footer__list__info__link">
									<img src="./style/img/facebook.svg" alt="Facebook">
								</a>
							</div>
							<div class="footer__list__info__item">
								<a href="" class="footer__list__info__link">
									<img src="./style/img/instagram.svg" alt="instagram">
								</a>
							</div>
							<div class="footer__list__info__item">
								<a href="" class="footer__list__info__link">
									<img src="./style/img/twitter.svg" alt="twitter">
								</a>
							</div>
							<div class="footer__list__info__item">
								<a href="" class="footer__list__info__link">
									<img src="./style/img/yelp.svg" alt="Yelp">
								</a>
							</div>
							<div class="footer__list__info__item">
								<a href="" class="footer__list__info__link">
									<img src="./style/img/snapchat.svg" alt="Snapchat">
								</a>
							</div>
						</div>
					</div>
					<div class="footer__lists__wrapper">
						<div class="footer__list__products__wrapper">
							<ul class="footer__list__products">
								<li class="footer__list__products__title">
									<span>Товары</span>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Все товары
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Диваны
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Столы
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Кухонные столы
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Кресла
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Тумбочки
									</a>
								</li>
								<li class="footer__list__products__item">
									<a href="" class="footer__list__products__link">
										Стулья
									</a>
								</li>
							</ul>
						</div>
						<div class="footer__list__nav__wrapper">
							<ul class="footer__list__nav">
								<li class="footer__list__nav__title">
									<span>Навигация</span>
								</li>
								<li class="footer__list__nav__item">
									<a href="" class="footer__list__link">Главная</a>
								</li>
								<li class="footer__list__nav__item">
									<a href="" class="footer__list__link">Скидки</a>
								</li>
								<li class="footer__list__nav__item">
									<a href="" class="footer__list__link">Контакты</a>
								</li>
							</ul>
						</div>
						<div class="footer__list__contact__wrapper">
							<ul class="footer__list__contact">
								<li class="footer__list__contact__title">
									Контакты
								</li>
								<li class="footer__list__contact__item">
									<div class="footer__list__contact__icon">
										<img src="./style/img/email.svg" alt="" srcset="">
									</div>
									<a href="" class="footer__list__contact__link">
										exaple@example.ru
									</a>
								</li>
								<li class="footer__list__contact__item">
									<div class="footer__list__contact__icon">
										<img src="./style/img/phone.svg" alt="" srcset="">
									</div>
									<a href="" class="footer__list__contact__link">
										+8 800 555 35 35
									</a>
								</li>
								<li class="footer__list__contact__item">
									<div class="footer__list__contact__icon">
										<img src="./style/img/location.svg" alt="" srcset="">
									</div>
									<a href="" class="footer__list__contact__link">
										г.Москва, ул.Пушкина, Д16
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__doc-pay">
					<div class="footer__doc-pay__wrapper">
						<div class="footer__doc-pay__text">
							&#169; Summer Light все права защищены
						</div>
						<div class="footer__doc-pay__var">
							<div class="footer__doc-pay__icon">
								<img src="./style/img/visa.svg" alt="" srcset="">
							</div>
							<div class="footer__doc-pay__icon">
								<img src="./style/img/paypal.svg" alt="" srcset="">
							</div>
							<div class="footer__doc-pay__icon">
								<img src="./style/img/mastercard.svg" alt="" srcset="">
							</div>
							<div class="footer__doc-pay__icon">
								<img src="./style/img/debit.svg" alt="" srcset="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- <script src="./js/karusel.js"></script> -->
</body>

</html>