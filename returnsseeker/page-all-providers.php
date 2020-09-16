<?php 
include('_header.php');
include('_filter.php');
include('_dataset.php');
?>
<body class="returnsseeker rs-all-providers">
	<?php include('_module-menu.php');?>
	<?php include('_module-breadcrumb.php');?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-12">
					<h1 class="rs-h1">All <span> Investment companies </span> </h1>
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
                            'title' => ' Categories',
                            'items' =>  $rs_deposit_methods
						],
                        [
                            'title' => 'Min. Investment',
                            'items' =>  $rs_investment
                        ]
                    ]);
                ?>
			</div>
		</div>
	</section>

	<section class="providers-list-section">
		<div class="container">  
			<div class="row">
				<div class="result-list col-lg-11 mx-auto">
					<?php
						foreach ($rs_providers_list as $rs_provider_list) 
						{ 
							include('_list_providers.php'); 
						} 
					?>
					<?php
						foreach ($rs_list_crypto_currency as $rs_currency) 
						{ 
							include('_crypto-currency_list.php'); 
						} 
					?>
				</div> 
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
	<?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>