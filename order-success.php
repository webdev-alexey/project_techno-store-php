<?php 
	require_once('config.php');
	$pageTitle = 'Заказ оформлен успешно!';
?>


<?php include('./templates/_head.php'); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<?php include('./templates/_header.php'); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">

					<div class="title-1 text-success mb-1">Заказ оформлен успешно!</div>
					<p>Наши менеджеры скоро свяжутся с вами.</p>
					<a href="index.php" class="btn btn-secondary">Вернуться на главную</a>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
