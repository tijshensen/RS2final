<?php 
include('_header.php');
include('_filter.php');
include('_dataset.php');
?>
<body class="rs-all-providers">
	<?php include('_menu.php');?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="breadcrumb-container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
								<li class="breadcrumb-item" aria-current="page">Best</li>
								<li class="breadcrumb-item" aria-current="page">Online Brokers for Stock Trading</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="col-12">
					<h1 class="h1">Best <span>   Financial Advisors </span> </h1>
					<div class="list-description">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
                    <div class="list-description collapse"  id="collapseExample">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
                   	<button class="show-more collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						<div class="show">read more</div>
						<div class="hide">show less</div>
					</button>
                </div>	
			</div>
		</div>
	</section>

	<section class="providers-list-section">
		<div class="container">  
			<div class="row">
				<div class="col-lg-11 mx-auto">
					<button type="button" class="btn-open-modal au-width" data-toggle="modal" data-target="#disclosureModal">Advertiser Disclosure</button> 
				</div>
				<div class="result-list col-lg-11 mx-auto">
                    <?php
						foreach ($rs_list_financial_advisors as $rs_provider_list) 
						{ 
							include('_list_providers.php'); 
						} 
					?>
				</div> 
				</div> 
			</div>
			 
		</div>
    </section> 
    
	<?php include('_sticky-menu-section.php'); ?>
	<?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>