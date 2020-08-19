<?php
include('_header.php');
include('_filter.php');
?>

<body class="rs-single-guide">
<?php include('_module-menu.php');?>

<?php 
$discloser = 'no';
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
                        'title' => 'Insurance',
                        'items' =>  $rs_insurances
                    ]
                ]);
			?>
		</div>
	</div>
</section>

<?php 
include('_module-disclaimer.php');
?>			
        
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

<section class="rs-content-section our-mission shadow-top">
	<div class="container">
		<div class="row justify-content-center">
			
              <div class="col-lg-8 ">
                   <div class="rs-block-caption">
   					<!-- <i class="icon-blue-logo"></i> -->
                       <h3 class="h3">Best Online Doctors</h3>
                   </div>

                <ul class="rs-block-toc auto-toc">
                    <?php /* This '.auto-toc' div needs to be here to build the table of contents. The auto-toc needs to be within the '.content-section' div and will read the first title in the '.content-block' divs */ ?>
                </ul>
                <div class="rs-block-content" id="terms">
                    <h4 class="h4">Finding You the Best Treatments in Healthcare & Wellness <span>Online</span></h4>
                    <p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
                </div>
                <div class="rs-block-content">
                    <h4 class="h4" id="disclosure">Advertising Disclosure</h4>
                    <p>We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.</p>
                </div>
                <img src="./img/mothers.jpg" alt="" class="content-img">
            </div>
		</div>
	</div>
</section>
    <!-- Modal -->
    <?php include('_modal-advertiser-disclosure.php'); ?>
    <?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>
