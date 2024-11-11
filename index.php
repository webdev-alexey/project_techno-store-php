<?php 
	require_once('config.php');

	if ( isset($_GET['category']) )  {
		$pageTitle = $_GET['category'];
	} else {
		$pageTitle = 'Главная страница';
	}

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
				<div class="col-md-9 col-lg-10">
					<div class="row">

					<?php
						if ( isset($_GET['category']) ) {
							$sql = "SELECT * FROM products WHERE category = :categoryTitle";
							$stmt = $db->prepare($sql);
							$stmt->bindValue(':categoryTitle', $_GET['category']);
							$stmt->execute();
							$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
						} else {
							$sql = "SELECT * FROM products";
							$result = $db->query($sql);
							$products = $result->fetchAll(PDO::FETCH_ASSOC);
						}

						foreach( $products as $product ){ 
							include('./templates/_product-item.php');
						}

					?>

					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
