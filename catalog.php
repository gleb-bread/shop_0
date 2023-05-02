<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";
	include "./header.php";
	include "./nav-menu.php";
	function returnProduct($resultConntection, $limitProd){
		$filterCategor = $_GET['categories'];
		if (isset($filterCategor) && $filterCategor != 0){
			$productAll = mysqli_query($resultConntection, "SELECT * FROM `shop__product` 
			WHERE `id__categories`='$filterCategor'");
			$categoriesAllQuery = mysqli_query($resultConntection, "SELECT * FROM `shop__categories`");
			$countAllProduct = mysqli_num_rows($productAll);
			$page = floor($countAllProduct / $limitProd); 
			$pageNow = $_GET['page'];
			$startLimit = $pageNow == 0 ? 0 : $pageNow * $limitProd;
			$productOnPage = mysqli_query($resultConntection, "SELECT * FROM `shop__product` 
			WHERE `id__categories`='$filterCategor' LIMIT $startLimit, $limitProd");
		} else {
			$productAll = mysqli_query($resultConntection, "SELECT * FROM `shop__product`");
			$categoriesAllQuery = mysqli_query($resultConntection, "SELECT * FROM `shop__categories`");
			$countAllProduct = mysqli_num_rows($productAll);
			$page = floor($countAllProduct / $limitProd); 
			$pageNow = $_GET['page'];
			$startLimit = $pageNow == 0 ? 0 : $pageNow * $limitProd;
			$productOnPage = mysqli_query($resultConntection, "SELECT * FROM `shop__product` LIMIT $startLimit, $limitProd");
		}
		?>
		<div class="catalog__wrapper">
			<div class="catalog__title">
				<h1>Каталог</h1>
			</div>
			<div class="catalog__filter">
				<div class="catalog__filter__title">
					<h2>Фильтры</h2>
				</div>
				<div class="catalog__filter__categories__wrapper">
					<div class="catalog__filter__categories__cart" style="background: center / 100% url('./style/img/header__bg.jpg') no-repeat;"
						id = "categories__btn__0">
						<div class="catalog__filter__filter">
							<span>Все товары</span>
						</div>
					</div>
					<?php while($categories = mysqli_fetch_assoc($categoriesAllQuery)){?>
					<div class="catalog__filter__categories__cart" style="
							<?php 
							$imgproduct = $categories['img__categories'];
							echo "background: center / 100% url('$imgproduct') no-repeat;";?>"
							id = "categories__btn__<?php echo $categories['id__categories']?>">
						<div class="catalog__filter__filter">
							<span><?php echo $categories['name__categories']; ?></span>
						</div>
					</div>
					<?php }?>
				</div>
				<div class="catalog__filter__categories__cart__btn__wrapper">
					<div class="catalog__filter__categories__cart__btn__container">
						<div class="catalog__filter__categories__cart__btn<?
							if (!isset($_GET['categories'])){
								echo "-active";
							}
						?>" id="categories__0" title="Все товары"></div>
					</div>
					<?php 
						$categoriesAllQuery = mysqli_query($resultConntection, "SELECT * FROM `shop__categories`");
						while($categories = mysqli_fetch_assoc($categoriesAllQuery)){?>
						<div class="catalog__filter__categories__cart__btn__container">
							<div class="catalog__filter__categories__cart__btn<?php 
							if ($categories['id__categories'] == ($_GET['categories'])){
								echo "-active";
							}?>"
							id = "categories__<?php echo $categories['id__categories'];?>"
							title = "<?php echo $categories['name__categories'];?>"></div>
						</div>
					<?php }?>
				</div>
				<div class="catalog__filter__comboBox">
					<div class="catalog__filter__comboBox__wrapper">
						<div class="catalog__filter__comboBox__title">
							Страна производтель:
						</div>
						<select name="contry" id="pet-select" class="catalog__filter__comboBox__container">
							<option value="0">Выберите страну</option>
							<?php 
							$countryAllQuery = mysqli_query($resultConntection, "SELECT `country__product` FROM `shop__product`");
							$country = array();
							while($resultCountry = mysqli_fetch_assoc($countryAllQuery)){
								if(!in_array($resultCountry['country__product'], $country)){
									array_push($country, $resultCountry['country__product']);
							?>
							<option value="<?php echo $resultCountry['country__product']; ?>"><?php echo $resultCountry['country__product']; ?></option>
							<?php 
								}
							}?>
						</select>
					</div>
					<div class="catalog__filter__comboBox__wrapper">
						<div class="catalog__filter__comboBox__title">
							Материал изделия:
						</div>
						<select name="contry" id="pet-select" class="catalog__filter__comboBox__container">
							<option value="0">Выберите материал</option>
							<?php 
							$countryAllQuery = mysqli_query($resultConntection, "SELECT `material__product` FROM `shop__product`");
							$matherial = array();
							while($resultCountry = mysqli_fetch_assoc($countryAllQuery)){
								if(!in_array($resultCountry['material__product'], $matherial)){
									array_push($matherial, $resultCountry['material__product']);
							?>
							<option value="<?php echo $resultCountry['material__product']; ?>"><?php echo $resultCountry['material__product']; ?></option>
							<?php 
								}
							}?>
						</select>
					</div>
					<div class="catalog__filter__comboBox__wrapper">
						<div class="catalog__filter__comboBox__title">
							Фильтр цены:
						</div>
						<select name="contry" id="pet-select" class="catalog__filter__comboBox__container">
							<option value="0">Фильтр цены</option>
							<option value="min">От наименьшей к наибольшей</option>
							<option value="max">От наибольшей к наименьшей</option>
						</select>
					</div>
					<div class="catalog__filter__comboBox__btn__start">
						Применить фильтры
					</div>
				</div>
				<div class="catalog__filter__line"></div>
			</div>
			<div class="catalog__cart__wrapper">
				<?php while($product = mysqli_fetch_assoc($productOnPage)) { ?>
				<div class="catalog__cart" id = "product__<?php echo $product['id__product']?>">
					<div class="catalog__cart__icon"style="
						background: url('<?php echo $product['img__product']?>');
						background-size: 100%;
						background-position: center;
						background-repeat: no-repeat;
						background-color: #F8F8FF;
						cursor: pointer;"></div>
					<div class="catalog__cart__name"><?php echo $product['name__product'] ?></div>
					<div class="catalog__cart__country"><?php echo $product['country__product'] ?></div>
					<div class="catalog__cart__price"><?php echo $product['price__product'] ?>&#8381;</div>
				</div>
				<?php }?>
			</div>
			<div class="catalog__btn__wrapper">
				<?php 
				$skipResult = true;
				for($i = 0; $i <= $page; $i++){
					if ($i + 1 == 1 || $i == $page || $i == $pageNow || $i == $pageNow - 1 || $i == $pageNow + 1){
					?>
					<a href="?page=<?php echo $i?>" 
					class="catalog__btn <?php echo  $pageNow == $i ? 'catalog__btn-active' : '' ?>"><?php echo $i + 1?></a>
				<?php 
				} else if ($skipResult){?> 
				<div href="?page=<?php echo $i?>" 
					class="catalog__btn__skip ?>">...</div>
			 <?php 
				$skipResult = false; 
			}
			}?>
			</div>
		</div>
		<?php 
			}
		?>
	
	<section class="catalog">
			<?php returnProduct($resultConntection, 10); ?>
	</section>
<?php 
		include "./footer.php";
?>
<script src="./js/openProduct-page.js"></script>
<script src="./js/openNewCategor.js"></script>
<?php
		include "./server/connectScript.php"
?>