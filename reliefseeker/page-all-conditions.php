<?php include('_dataset.php'); ?>
<?php include('_header.php'); ?>

<body class="rs-all-conditions">
	<?php include('_module-menu.php');?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-md-10 header-block">
					<h1 class="rs-h1">See All <span>Conditions</span> </h1>
					<div class="rs-description">Explore to see all of the health conditions you can treat online. Healing starts here.</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="rs-section-filter">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="rs-search-input-block col-md-6 col-lg-4">
					<input class="search-input" id="myInput" type="text" placeholder="">
					<i class="icon-icon-search"></i>
				</div> 
			</div>
		</div>
	</section>

	<section class="rs-all-conditions rs-alphabet alphabet-section">
		<div class="container">
			<div class="row justify-content-center alphabet-container">
				<div class="col-10 col-sm-11 col-lg-10">
					<ul class="rs-list result-list" id="rs-list">

						<?php
						$previousFirstCharacter ='';
						foreach ($rs_conditions as $rs_condition) { 

							$firstCharacter = $rs_condition['name'][0];
							if ($firstCharacter != $previousFirstCharacter){
								$previousFirstCharacter = $firstCharacter;

								if ($previousFirstCharacter != '') { ?>
									</li>
								<?php } ?>

								<li class="alphabet-section list" id="<?php echo $firstCharacter;?>">
									<span class="name-section alfabet"><?php echo $firstCharacter;?></span>

								<?php
							}
							?>

							<div class="result-item <?php //echo $rs_condition['condition_filter']; ?>">
								<a href="page-single-condition.php" class="simple-card-block rs-conditions-list">
									<div class="simple-flex">
										<span class="block-name"><?php echo $rs_condition['name']; ?></span>
									</div>
									<div class="numb-block">
										<span class="block-number">12</span>
										<span class="block-description">Treatment Providers</span>
									</div>
									<i class="icon-blueArrow arw-right"></i>
								</a>
							</div>

							<?php
						}
						?>
						</li>
					</ul>	

				</div>

				<div class="col-1 anchors-container">
					<ul class="alphabet">
						<?php foreach ($rs_provider_alphabet as $rs_letter) { ?>
							<li class="letter"><a href="#<?php echo $rs_letter; ?>" class="letter-link"><?php echo $rs_letter; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('_module-footer-menu.php'); ?>
	<?php include('_scripts.php'); ?>
	<?php include('_footer.php'); ?>