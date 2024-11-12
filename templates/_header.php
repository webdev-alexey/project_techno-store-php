<!-- header -->
<div class="header">
	<div class="row">
		<div class="col-sm-6">
			<a href="index.php" class="site-logo">
				<span>мега</span>Store
			</a>
		</div>
		<div class="col-sm-6">
			<div class="admin-link">
				<?php if ( isset($_SESSION['login']) && $_SESSION['login'] == 'on'): ?>
					<a class="admin_link" href="./admin.php">
						<img width="38" src="img/icons/padlock.svg" alt="">
					</a>
					<a class="admin_link" href="./logout.php">
						<img width="38" src="img/icons/logout.svg" alt="">
					</a>
				<?php else: ?>
					<a class="admin_link" href="./login.php">
						<img width="38" src="img/icons/padlock.svg" alt="">
					</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
<!-- // header -->