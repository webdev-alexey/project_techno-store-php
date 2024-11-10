<?php 
	require_once('config.php');
	$pageTitle = 'Страница товара';
?>

<?php include('./templates/_head.php'); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<?php include('./templates/_header.php'); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">

				<?php include('./templates/_aside.php'); ?>

				<!-- Center Part -->
				<div class="col-md-9">
					<?php 
						$currentProductId = intval($_GET['productId']);
						$sql = "SELECT * FROM products WHERE id = '$currentProductId'";
						$result = $db->query($sql);
						$product = $result->fetch(PDO::FETCH_ASSOC);
					?>

					<div class="product-title">
						<?php echo $product['title'] ?>
					</div>

					<div class="row">
						<div class="col-6">
							<img src="img/products/<?php echo $product['img'] ?>" alt="">
						</div>
						<div class="col-6">
							<div class="product-price"><?php echo $product['price'] ?> руб</div>
							<a href="order.php" class="product-btn-order">Сделать заказ</a>
							<div class="product-desc">
								<?php echo $product['description'] ?>
							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
