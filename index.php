<?php 
	$pageTitle = 'Главная страница';
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
							for ($i = 1; $i <= 5; $i++ ) {
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
