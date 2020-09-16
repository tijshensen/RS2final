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
					<h1 class="rs-h1">All <span> Investment companies </span> </h1>
					<div class="rs-list-description">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</div>
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
                            'title' => ' Deposit methods',
                            'items' =>  $rs_deposit_methods
                        ],
                        [
                            'title' => 'Fiat accepted',
                            'items' =>  $rs_fiat_accepted
                        ],
                        [
                            'title' => 'Crypto supported',
                            'items' =>  $rs_crypto_supported
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
						foreach ($rs_list_crypto_currency as $rs_currency) 
						{ 
							include('_crypto-currency_list.php'); 
						} 
					?>
				</div> 
			</div>
			 
		</div>
    </section> 
    
    

	<?php include('_frame.php'); ?>
	<?php include('_sticky-menu-section.php'); ?>
	<?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>