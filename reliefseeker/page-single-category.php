<?php
include('_header.php');
include('_filter.php');
?>

<body class="rs-single-guide">
<?php include('_module-menu.php');?>

<?php 
$discloser = 'yes';
include('_module-breadcrumb.php');
?>

<section class="rs-section-hero">
	<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-10 header-block">
				<h1 class="rs-h1">Best <span>Online Doctors</span></h1>
				<div class="rs-description">
					You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home.  
				</div>
			</div>	
		</div>
	</div>
</section>
			
<!-- <section class="rs-section-filter">
	<div class="container"> 
		<div class="row justify-content-center">
			</?php
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
                        'title' => 'Insurance',
                        'items' =>  $rs_insurances
                    ]
                ]);
			?>
		</div>
	</div>
</section> -->

<!-- </?php 
include('_module-disclaimer.php');
?>			 -->
        
<section class="rs-section-provider-list">
	<div class="container"> 
		<div class="row justify-content-center">			
			<div class="col-12 mx-auto">
				<?php
				$divlist = 'div';
				$style = 'provider-item-horizontal provider-item-separate';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					include('_card-provider.php'); 
				} 
				?>
			</div>
		</div>
	</div>
</section>

	<?php include('_module-content-block.php'); ?>
    <!-- Modal -->
    <?php include('_modal-advertiser-disclosure.php'); ?>
	<?php include('_module-email-sign-up.php'); ?>
    <?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>
