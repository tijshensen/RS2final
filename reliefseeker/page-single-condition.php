<?php
include('_header.php');
include('_filter.php');
?>

<body class="rs-single-condition">
	<?php include('_module-menu.php');?>
	
	
<?php 
$discloser = 'yes';
include('_module-breadcrumb.php');
?>

<section class="rs-section-hero">
	<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h1 class="rs-h1"><span>Depression</span> Treatment</h1>
				<div class="rs-description">
					Start treating your depression today with online healthcare providers. Discover apps, medications, therapies, and online doctors so you can start treatment from the comfort of your home
				</div>
				<div class="rs-button-with-number">
					<a href="#health-apps-section" class="rs-button-inner">
						<span class="button-number">12</span>
						<span class="button-description">Health apps</span>
					</a>
					<a href="#online-therapy-section" class="rs-button-inner">
						<span class="button-number">12</span>
						<span class="button-description">Online therapy</span>
					</a>
				</div>
			</div>	
		</div>
	</div>
</section>


<section class="banner-condition-section">
	<div class="container">
		<div class="row justify-content-center">		
			<div class="col-xl-10 col-lg-11 col-md-8">
  				<section class="rs-section-provider-list">
					<div class="container"> 
						<div class="row justify-content-center">			
							<div class="col-12 mx-auto">
								<?php
								$divlist = 'div';
								$style = 'provider-item-horizontal provider-item-separate';
								$x =0;
								foreach ($rs_providers_cards as $rs_providers_card) 
								{ 
									include('_card-provider.php'); 
									$x++;
									if($x==1) break;
								} 
								?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<section class="carousel-section" id="health-apps-section">
	<div class="container">
        <div class="row dr-header">
            <div class="rs-header-block col-12">
                <h3 class="h3">Health Apps for Depression</h3>
                <div class="description">Start treating your depression today with online telehealth providers</div>
            </div>
        </div>
        <div class="row  justify-content-center">
            <ul class="provider-carousel owl-carousel col-lg-11">
	            <?php
				$style = 'provider-item-vertical';
				$divlist = 'li';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					$rs_providers_card['provider_services'] = 'Doctor, Pharmacy, +2';
					include('_card-provider.php'); 
				} 
				?>
            </ul>

            <a href="#medication" class="btn-compare">Compare prices</a>
        </div>
	</div>
</section>
<section class="carousel-section" id="online-therapy-section">
	<div class="container">
        <div class="row  justify-content-center">			
	        <div class="row dr-header">
	            <div class="rs-header-block col-12">
	                <h3 class="h3">Online Therapy for Depression</h3>
	                <div class="description">Anxiety or stress can result in Erectile dysfunction. Discover how therapy can help.</div>
	            </div>
			</div>

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
                    'title' => 'Insurance',
                    'items' =>  $rs_insurances
                ]
            ]);
			?>

            <ul class="provider-carousel owl-carousel col-lg-11 result-list">
	            <?php
				$style = 'provider-item-vertical';
				$divlist = 'li';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					$rs_providers_card['provider_services'] = 'Doctor, Pharmacy, +2';
					include('_card-provider.php'); 
				} 
				?>
			</ul>
            <a href="#medication" class="btn-compare">Compare prices</a>
		</div>

	</div>
</section>

    
<section class="compare-section" id="medication">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="h4">Depression treatment prices</h4>
            </div>
            <div class="col-12 table-shadow">
                <div class="table-responsive">
                    <table class="compare-table table">
                        <tbody>
                            <tr>
                                <td class="fixed"><div class="td column"></div></td>
                                <td class="transparent"><div class="td"></div></td>
                                <td><div class="td"></div></td>
                                <td><div class="td">CIALIS (DAILY) </div></td>
                                <td><div class="td">CIALIS (DAILY) 10MG </div></td>
                                <td><div class="td">TADALAFIL (GENERIC CIALIS) 10MG </div></td>
                                <td><div class="td">VIAGARA 2MG </div></td>
                                <td><div class="td">VIAGARA 5MG </div></td>
                                <td><div class="td">VIAGARA 10MG </div></td>
                            </tr>
                            <tr>
                                <td class="fixed"><div class="td column"><img class="logo-company" src="./img/logo-lemonaid.png" alt=""> <span class="name">Lemonaid Health</span> </div></td>
                                <td class="transparent"><div class="td column"><img class="logo-company" src="./img/logo-lemonaid.png" alt=""> <span class="name">Lemonaid Health</span> </div></td>
                                <td><div class="td"></div></td>
                                <td><div class="td"><span class="na">N/A</span></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$7</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="na">N/A</span></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                            </tr>
                            <tr>
                                <td class="fixed"><div class="td column"><img class="logo-company" src="./img/logo-hims.png" alt=""> <span class="name">Hims</span> </div></td>
                                <td class="transparent"><div class="td column"><img class="logo-company" src="./img/logo-hims.png" alt=""> <span class="name">Hims</span> </div></td>
                                <td><div class="td"></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                                <td><div class="td bg-oval-blue"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$7</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$7</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                            </tr>
                            <tr>
                                <td class="fixed"><div class="td column"><img class="logo-company" src="./img/logo-help.png" alt=""> <span class="name">Better Help</span> </div></td>
                                <td class="transparent"><div class="td column"><img class="logo-company" src="./img/logo-help.png" alt=""> <span class="name">Better help</span> </div></td>
                                <td><div class="td"></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="na">N/A</span></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$7</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                            </tr>
                            <tr>
                                <td class="fixed"><div class="td column"><img class="logo-company" src="./img/logo-talkspace.png" alt=""> <span class="name">TalkSpace</span> </div></td>
                                <td class="transparent"><div class="td column"><img class="logo-company" src="./img/logo-talkspace.png" alt=""> <span class="name">TalkSpace</span> </div></td>
                                <td><div class="td"></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$2</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="na">N/A</span></div></td>
                                <td><div class="td"><span class="price">$3</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="price">$7</span><span class="count">/PILL</span></div></td>
                                <td><div class="td"><span class="na">N/A</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

	

    <?php include('_modal-advertiser-disclosure.php'); ?>

	<?php include('_module-footer-menu.php'); ?>
    
<!-- </?php $load_owl_carousel = true; ?> -->


    <?php include('_scripts.php'); ?>
    <script src="./js/owl.carousel.min.js"></script>
    <?php include('_footer.php'); ?>