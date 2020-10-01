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
<style>
	.quick-picks{
		border: 1px solid #FAB03B; 
		padding: 20px 12px;
		margin-bottom: 30px;
	}
	.quick-picks .rs-h3{
		font-size: 22px;
	}
	
	.rs-quick-pick{
		padding: 6px 0 6px 30px;
		background: url('./svg/price.svg') no-repeat 0 9px;
		background-size: 17px 16px;
	}
	.rs-quick-pick p{
		font-size: 14px;
		float: left;
		text-transform: capitalize;
		padding-right: 8px;
		margin-bottom: 0;
	}
	.rs-quick-pick a{
		font-size: 14px;
		font-weight: 600;
		text-decoration: underline;
		color: #17A3E0;
	}
	
	@media(min-width: 768px){
		.quick-picks{
			padding: 20px 20px;
		}
		.quick-picks .rs-h3{
			font-size: 26px;
		}
		.rs-quick-pick p,
		.rs-quick-pick a
		{
			font-size: 16px;
		}
	}
</style>
<section class="rs-section-quick-picks">
	<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="quick-picks">
					<h3 class="rs-h3">Editor's Quick Picks for the Best Online Therapy</h3>
					<div class="rs-quick-pick clearfix">
						<p>Best live Therapy (Voice/video)</p>
						<a href="https://betterhelp.com">Betterhelp</a>
					</div>
					<div class="rs-quick-pick clearfix">
						<p>Best Couples Therapy (Messaging)</p>
						<a href="https://betterhelp.com">Betterhelp</a>
					</div>
					<div class="rs-quick-pick clearfix">
						<p>Best Couples Therapy (Messaging)</p>
						<a href="https://betterhelp.com">Betterhelp</a>
					</div>
					<div class="rs-quick-pick clearfix">
						<p>Best Couples Therapy (Messaging)</p>
						<a href="https://betterhelp.com">Betterhelp</a>
					</div>
					<div class="rs-quick-pick clearfix">
						<p>Best Couples Therapy (Messaging)</p>
						<a href="https://betterhelp.com">Betterhelp</a>
					</div>
				</div>
			</div>	
			<div class="col-md-3 d-none d-sm-block">
				<img src="./img/quickpicks.png"/>
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
