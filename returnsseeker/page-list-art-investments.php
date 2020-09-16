<?php 
include('_header.php');
include('_filter.php');
?>
<body class="returnsseeker rs-all-providers">
	<?php include('_module-menu.php');?>
	<?php 
	$discloser = 'yes';
	include('_module-breadcrumb.php');
	?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="rs-h1">Best <span>  Art Investments</span> </h1>
					<div class="rs-list-description">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
					<div class="rs-list-description collapse"  id="collapseExample">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
                    <div class="rs-list-description collapse"  id="collapseExample">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
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
				<div class="result-list col-lg-11 mx-auto">
                    <?php
						foreach ($rs_list_art_investments as $rs_provider_list) 
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