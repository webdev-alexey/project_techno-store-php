<?php 
	require_once('config.php');
	$pageTitle = 'Оформить заказ';
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

					<div class="title-1">Сделать заказ</div>

					<?php 
						$currentProductId = intval($_GET['id']);
						$sql = "SELECT * FROM products WHERE id = '$currentProductId'";
						$result = $db->query($sql);
						$product = $result->fetch(PDO::FETCH_ASSOC);
					?>

					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/<?=$product['img']?>">
						</div>
						<div class="order-desc">
							<h4 class="order-title"><?=$product['title']?></h4>
							<div class="order-price"><?=$product['price']?> ₽</div>
						</div>
					</div>

					<form method="POST" action="mail.php">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Имя и Фамилия">
						</div>
						<div class="form-group">
							<input type="text" name="phone" class="form-control" placeholder="Телефон">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" name="address" class="form-control" placeholder="Адрес">
						</div>

						<input type="hidden" name="productTitle" value="<?=$product['title']?>">
						<input type="hidden" name="productId" value="<?=$product['id']?>">
						<input type="hidden" name="productPrice" value="<?=$product['price']?>">

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Оформить заказ</button>
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
