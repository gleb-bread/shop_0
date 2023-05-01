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
		$startLimit = $pageNow == 0 ? 0 : $pageNow * $limitProd;
		$productOnPage = mysqli_query($resultConntection, "SELECT * FROM `shop__product` LIMIT $startLimit, $limitProd");
		?>
		<div class="catalog__wrapper">
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
	<script src="./js/openProduct-page.js"></script>
<?php 
		include "./footer.php";
		include "./server/connectScript.php"
?>