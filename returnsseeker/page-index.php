<?php include('_header.php'); ?>

<body class="returnsseeker rs-index">
	<?php include('_module-menu.php');?>
	
	<section class="banner-color-section">
		<div class="container">
			<div class="banner-caption-block">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-1">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-2">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-3">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-4">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-5">
				<h1 class="h1">Does your <span>money</span> work for you?</h1>
			</div>
		</div>	
	</section>
	
	<section class="guides-section">
		<div class="container">		
			<div class="section-header">				
				<h2 class="h2">Grow Your Wealth While You Sleep</h2>
				<p class="rs-description">Investing doesn’t have to be difficult. Choose from over 9 alternative investments catetories and take control of your wealth today</p>
			</div>

				
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-10 col-sm-7 guides-container">
						<div class="row">
						
							<?php
							$x =0;
							foreach ($rs_guides_cards as $rs_guides_card) 
							{ 
							?>
							<div class="col-lg-4 col-md-6 card-container">
								<?php	
								include('_card-guide.php');
								?>
							</div>
							<?php 
							$x++;
							if($x==9) break;
							} 
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<a href="all-guides.php" class="btn btn-cta">See All Categories</a>
			</div>
		</div>
	</section>
	
	
	<?php 
	include('_module-news.php');
	?>
	
	<?php 
	include('_module-partners.php');
	?>
	
	<?php 
	include('_module-checklist.php');
	?>

	<?php include('_module-email-sign-up.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>
</body>

