<?php
    error_reporting(E_ALL);
?>
<?php include('_header.php'); ?>

<body class="rs-all-guides">
	<?php include('_module-menu.php');?>



<section class="rs-section-hero">
	<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-10 text-center header-block">
				<h1 class="rs-h1"><span>Telehealth</span> Guides <span>May 2020</span></h1>
				<div class="rs-description">Review the Ultimate Telehealth Guides to Find the Best Online Treatments</div>
			</div>	
		</div>
	</div>
</section>
			

<section class="guide-banner-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-10 col-sm-7 card-section">
				<div class="row">
					
					<?php
					foreach ($rs_guides_cards as $rs_guides_card) 
					{ 
					?>
					<div class="col-lg-3 col-md-6 card-container">
						<?php	
						include('_card-guide.php');
						?>
					</div>
					<?php 
					} 
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('_module-content-block.php'); ?>

<?php
	$bgcolor = 'bg-light-blue';
	include('_module-news.php');
?>

<?php include('_module-email-sign-up.php'); ?>
<?php include('_module-footer-menu.php');?>

<?php include('_scripts.php'); ?>
<?php include('_footer.php'); ?>