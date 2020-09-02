<?php include('_header.php'); ?>

<body class="reliefseeker rs-index">
	<?php include('_module-menu.php');?>
	<section class="banner-color-section">
		<div class="container">
			<div class="banner-caption-block">
				<img src="svg/crose.svg" alt="" class="cros cros-1">
				<img src="svg/crose.svg" alt="" class="cros cros-2">
				<img src="svg/crose.svg" alt="" class="cros cros-3">
				<img src="svg/crose.svg" alt="" class="cros cros-4">
				<img src="svg/crose.svg" alt="" class="cros cros-5">
				<h1 class="h1">the future of <span>HEALTHCARE</span> is here</h1>
			</div>
		</div>	
	</section>

	<section class="guides-section">
		<div class="container">
			<h2 class="h2">Take Control of Your Health <span>Online</span></h2>
			<p class="rs-description">Getting treatment is more affordable, convenient, and discreet than ever.<br/>Search by category to discover over 150 of the best online healthcare providers.</p>

				
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-10 col-sm-7 guides-container">
					<div class="row">
					
						<?php
						$x =0;
						foreach ($rs_guides_cards as $rs_guides_card) 
						{ 
						?>
						<div class="col-lg-3 col-md-6 card-container">
							<?php	
							include('_card-guide.php');
							?>
						</div>
						<?php 
						$x++;
						if($x==8) break;
						} 
						?>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-center">
				<a href="page-all-categories.php" class="btn btn-cta">See All Categories</a>
			</div>	
				
		</div>
	</section>


	<section class="conditions-section bg-light-blue">
		<div class="container">
		
			<div class="section-header">
				<h2 class="h2">Treat Hundreds of <span>Conditions</span></h2>
				<p class="rs-description">Search by condition to compare providers and get the best treatment available.</p>
			</div>
				
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-10 col-sm-7 conditions-container">
						<div class="row">
							<?php
							$x =0;
							foreach ($rs_conditions as $rs_condition) 
							{ 
								if($x==6){
									$class="d-none d-sm-block";
								}
							?>
							<div class="col-lg-4 col-md-6 card-container <?php echo $class; ?>">
								<a href="#" class="card-conditions linear-<?php echo $rs_condition['color']; ?>">
									<div class="card-conditions-name"><?php echo $rs_condition['name']; ?></div>
									<div class="card-conditions-providers"><?php echo $rs_condition['providers']; ?> providers</div>
								</a>
							</div>
							<?php 
							$x++;
							if($x==12) break;
							} 
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center mt-3 mt-md-0">
				<a href="page-all-conditions.php" class="btn btn-cta ">See All Conditions</a>
			</div>
		</div>
	</section>


	<section class="partners-section">
		<div class="container">
			<h2 class="h2">Providers You Can <span>Trust</span></h2>
			<p class="rs-description">Search by condition to compare providers and get the best treatment avaiable</p>
			<div class="partners-container">
				<?php
					$x =0;
					foreach ($rs_provider_link as $rs_provider_link) 
					{ 
					?>						
						<?php	
						include('_link_provider.php');
						?>
					<?php 
					$x++;
					if($x==10) break;
					} 
				?>
			</div>
			<div class="d-flex justify-content-center">
				<a href="page-all-providers.php" class="btn btn-cta">See All Providers</a>
			</div>
		</div>
	</section>


	<?php 
	$bgcolor =  'bg-light-blue';
	$hide_icon = '0';
	include('_module-news.php');
	?>

	<section class="rs-content-section our-mission pt-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 ">
					<div class="rs-block-content">
						<div class="tagline-above">Best Online Doctors</div>
						<h4 class="h4">Finding You the Best Treatments in Healthcare & Wellness <span>Online</span></h4>
						<p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. </p>
						<p> Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. </p>
						<p> ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
					</div>
					<div class="rs-block-content">
						<h4 class="h4">Advertising Disclosure</h4>
						<p>We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.</p>
					</div>
					<!-- <img src="./img/mothers.jpg" alt="" class="content-img"> -->
				</div>
			</div>
		</div>
	</section>

	<?php include('_modal-advertiser-disclosure.php'); ?>


	<section class="conditional-list-section bg-light-blue">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 conditional-list-img-block">
					<img src="./img/list-item-img.jpg" alt="">
				</div>
				<div class="col-lg-7 conditional-list-block">
					<h2 class="h2">Don’t wait another second.</h2>
					<div class="rs-description">Get care today</div>
					<ul class="info-list">
						<li class="info-list-item"><div class="item-text">The <span>largest</span> collection of online healthcare providers</div></li>
						<li class="info-list-item"><div class="item-text"><span>Quick search</span> by condition, treatment or treatment types</div></li>
						<li class="info-list-item"><div class="item-text">Get treatment <span>today</span>, no need to leave home</div></li>
						<li class="info-list-item"><div class="item-text"><span>Save money,</span> easily compare prices and get the best offers here</div></li>
					</ul>
					<a href="page-all-providers.php" class="btn btn-cta">See all providers</a>
				</div>
			</div>
		</div>
	</section>
	<?php include('_module-email-sign-up.php'); ?>
	<?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>