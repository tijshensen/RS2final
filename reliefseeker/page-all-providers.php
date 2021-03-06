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
			<div class="row justify-content-left">
	            <div class="col-md-3 rs-search">
					<div class="rs-search-input-block">
	               		<input class="search-input" id="myInput" type="text" placeholder="">
	                	<i class="icon-icon-search"></i>
					</div>
	            </div>
				<div class="col-md-8 rs-filter">
					<div class="row">
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
			</div>
			<?php include '_filter-selection.php';?>
		</div>
	</section>

	<section class="rs-alphabet alphabet-section providers">
		<div class="container">   
			<div class="alphabet-container">
				<div class="row justify-content-center p-relative">
					<div class="col-10 col-md-11">
						<!-- Be sure to add the 'result-list' class to the ul with the search results -->
						<ul class="rs-list result-list" id="rs-list">
							<li class="alphabet-section list" id="a">
								<!-- Make sure the results for each letter are loaded inside the 'alphabet-section' li and right after the span element containing the letter. This way we can check if they are empty or not -->
								<span class="name-section left-abs">A</span>

								<?php
								$style = 'provider-item-horizontal provider-item-separate';
								$hidenumber = 'yes';
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
						<div id="sidebar">
							<div class="sidebar-inner">
								<ul class="alphabet">
									<?php foreach ($rs_provider_alphabet as $rs_letter) { ?>
										<li class="letter"><a href="#<?php echo $rs_letter; ?>" class="letter-link"><?php echo $rs_letter; ?></a></li>
										<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

			<?php include('_module-email-sign-up.php'); ?>	
			<?php include('_module-footer-menu.php');?>
<?php include('_scripts.php'); ?>



	<script>
	$(document).ready(function() {
	      $("#sidebar").stickySidebar({
	        topSpacing: 130,
	        bottomSpacing: 60,
	        containerSelector: ".result-list"
	      });
	    });
	</script>
	<script type="text/javascript" src="./js/jquery.sticky-sidebar.min.js"></script>	
	
<?php include('_footer.php'); ?>