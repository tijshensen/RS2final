<?php 
include('_header.php');
include('_filter.php');
include('_dataset.php');
?>
<body class="rs-all-providers">
	<?php include('_module-menu.php');?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h1 class="rs-h1">Discover <span>354 Online Health Providers</span> </h1>
					<div class="rs-description">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="rs-section-filter">
		<div class="container"> 
			<div class="row justify-content-center">
                <?php
                    showFilter([
                        [
                            'title' => 'Search Condition',
                            'items' =>  $rs_conditions
                        ],
                        [
                            'title' => 'Search treatment',
                            'items' =>  $rs_treatments
                        ],
                        [
                            'title' => 'Treatment type',
                            'items' =>  $rs_treatment_types
                        ],
                        [
                            'title' => 'Category',
                            'items' =>  $rs_categories
                        ]
                    ]);
                ?>
			</div>
		</div>
	</section>

	<section class="rs-alphabet alphabet-section providers">
		<div class="container">   
			<div class="alphabet-container">
				<div class="row justify-content-center p-relative">
					<div class="col-10 col-md-12">
						<!-- Be sure to add the 'result-list' class to the ul with the search results -->
						<ul class="rs-list result-list" id="rs-list">
							<li class="alphabet-section list" id="a">
								<!-- Make sure the results for each letter are loaded inside the 'alphabet-section' li and right after the span element containing the letter. This way we can check if they are empty or not -->
								<span class="name-section left-abs">A</span>

								<?php
								$style = 'provider-item-horizontal provider-item-separate';
								foreach ($rs_providers_cards as $rs_providers_card) 
								{ 
									include('_card-provider.php'); 
								} 
								?>

							</li>		
							<li class="alphabet-section list" id="b">
								<span class="name-section left-abs">B</span>

								<?php
								$style = 'provider-item-horizontal provider-item-separate';
								foreach ($rs_providers_cards as $rs_providers_card) 
								{ 
									include('_card-provider.php'); 
								} 
								?>
							</li>
						</ul>    
					</div>

					<div class="anchors-container abs-right col-1 col-sm-1">
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

		<?php include('_footer.php'); ?>

	</body>