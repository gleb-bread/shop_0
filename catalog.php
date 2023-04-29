<?php
	include "./server/connectionDB.php";
	include "./server/bestProduct.php";
	include "./header.php";
	include "./nav-menu.php";
	createNavMenu('');
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
				<?php 
				$skipResult = true;
				for($i = 0; $i <= $page; $i++){
					if ($i + 1 == 1 || $i == $page || $i == $pageNow || $i == $pageNow - 1 || $i == $pageNow + 1){
					?>
					<a href="?page=<?php echo $i?>" 
					class="catalog__btn <?php echo  $pageNow == $i ? 'catalog__btn-active' : '' ?>"><?php echo $i + 1?></a>
				<?php 
				} else if ($skipResult){?> 
				<a href="?page=<?php echo $i?>" 
					class="catalog__btn__skip ?>">...</a>
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
		include "./server/connectScript.php"
?>