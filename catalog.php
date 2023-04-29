<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";
	include "./header.php";
	include "./nav-menu.php";
	function returnProduct($resultConntection, $limitProd){
		$productAll = mysqli_query($resultConntection, "SELECT * FROM `shop__product`");
		$countAllProduct = mysqli_num_rows($productAll);
		$page = floor($countAllProduct / $limitProd); 
		$pageNow = $_GET['page'];
		$startLimit = $pageNow == 0 ? 1 : $pageNow * $limitProd;
		$endLimit = $pageNow == 0 ? ($pageNow + 1) * $limitProd : $limitProd;
		$productOnPage = mysqli_query($resultConntection, "SELECT * FROM `shop__product` LIMIT $startLimit, $endLimit");
		?>
		<div class="catalog__wrapper">
			<div class="catalog__cart__wrapper">
				<?php while($product = mysqli_fetch_assoc($productOnPage)) { ?>
				<div class="catalog__cart">
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
				<?php for($i = 0; $i <= $page; $i++){?>
					<a class="catalog__btn" href="?page=<?php echo $i?>" class="catalog__btn__link"><?php echo $i + 1?></a>
				<?php }?>
			</div>
		</div>
		<?php 
			}
		?>
	
	<section class="catalog">
		
			<?php returnProduct($resultConntection, 10);//while($product = mysqli_fetch_assoc($infoProduct)) {?>
				<!-- <div class="catalog__cart">
					<div class="catalog__cart__icon"style="
						background: url('<?php //echo $product['img__product']?>');
						background-size: 100%;
						background-position: center;
						background-repeat: no-repeat;
						background-color: #F8F8FF;
						cursor: pointer;"></div>
					<div class="catalog__cart__name"><?php //echo $product['name__product'] ?></div>
					<div class="catalog__cart__country"><?php //echo $product['country__product'] ?></div>
					<div class="catalog__cart__price"><?php //echo $product['price__product'] ?>&#8381;</div>
				</div> -->
				
				<!-- <div class="catalog__btn__wrapper">
					<div class="catalog__btn">
						<a href="" class="catalog__btn__link"></a>
					</div>
				</div> -->
			<?php //}?>
	</section>
<?php 
		include "./footer.php";
		include "./server/connectScript.php"
?>