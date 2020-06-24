<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>

<section class="banner-section">
	<div class="container">
		<div class="row justify-content-center">
			<div>
				<h1>Get Best In-Class <span>Healthcare</span> Online</h1>
				<span class="rs-description">Search the World’s Largest Directory of Over 250 Online Healthcare Providers and Start Treatment Today</span>
			</div>
			<div class="col-xl-11">
				<div class="h2 rs-instruction">Easily explore the best healthcare providers</div>
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
					if($x==4) break;
					} 
					?>
				</div>
			</div>
			<div class="col-xl-10 col-md-11 simple-btn-block">
				<a href="all-guides.php" class="btn btn-cta">See all Categories</a>
			</div>
		</div>
	</div>
</section>

<section class="provider-list-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="section-header">
					<!-- <span class="header-disclosure">Advertiser Disclosure</span> -->
					<div class="header-disclosure" data-toggle="modal" data-target="#disclosureModal">
						Advertiser Disclosure
					</div>
					<div class="logo-icon">
					<img src="./svg/mini-logo.svg" alt=""><span>Healing starts here</span>
					</div>
					<!-- <h2 class="h2">Find the Right <span>Provider</span> for You</h2> -->
				</div>
			</div>

			<div class="single-filter-container col-12">
				<div class="filter-caption">Compare the Best Providers</div>
				<div class="dropdown-filter">
					<div class="dropdown-filter-toggle" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Online Therapy <i class="icon-arr-down"></i>
					</div>
					<div class="dropdown-menu" aria-labelledby="dropdownFilter">
						<a class="dropdown-item" href="#">Online doctor</a>
						<a class="dropdown-item" href="#">Online therapy</a>
						<a class="dropdown-item" href="#">Digital clinics</a>
						<a class="dropdown-item" href="#">Online pharmacy</a>
						<a class="dropdown-item" href="#">At-home Lab Testing Kits</a>
						<a class="dropdown-item" href="#">Health Apps</a>
						<a class="dropdown-item" href="#">Skin Care</a>
						<a class="dropdown-item" href="#">Supplements</a>
						<a class="dropdown-item" href="#">Medical Devices</a>
						<a class="dropdown-item" href="#">Teeth Aligners</a>
						<a class="dropdown-item" href="#">Primary Care</a>
						<a class="dropdown-item" href="#">Activity Trackers</a>
					</div>
				</div>
			</div>
			
			<!-- </?php include('_filter.php'); ?> -->
			<ul class="col-lg-11 mx-auto">
                <?php
				$x =0;
				$divlist = 'li';
				$style = 'provider-item-horizontal provider-item-separate mx-auto';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					include('_card-provider.php'); 
				$x++;
				if($x==3) break;
				} 
				?>
			</ul>
			<div class="col-12 text-center d-flex">
				<a href="all-providers.php" class="btn btn-cta mx-auto">See all providers</a>
			</div>
		</div>
	</div>
</section>


<?php 
include('_module-news.php');
?>

	<div class="bg-white our-mission">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-7 section-header">
					<div class="logo-icon">
					<img src="./svg/mini-logo.svg" alt=""><span>Our mission is clear</span>
					</div>
					<h2 class="h2">Finding You the Best Treatments in Healthcare & Wellness <span>Online</span></h2>
				</div>
				
				<div class="col-lg-7 col-md-8 text-block mx-auto">
					<p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
					<p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
				</div>

				<div class="col-md-4 img-block-full ml-auto">
					<?php include('./svg/001-plaster.svg');?>
				</div>

			</div>
		</div>
	</div>

	<?php include('_advertiser-disclosure.php'); ?>
	
	<section class="conditional-list-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 conditional-list-img-block">
					<img src="./img/list-item-img.jpg" alt="">
				</div>
				<div class="col-lg-7 conditional-list-block">
					<h5 class="h5">Don’t wait another second.</h5>
					<div class="list-info-description">Find the best treatments in healthcare & wellness <span>online</span></div>
					<ul class="info-list">
						<li class="info-list-item"><div class="item-text">The <span>largest</span> collection of online healthcare providers</div></li>
						<li class="info-list-item"><div class="item-text"><span>Quick search</span> by condition, treatment or treatment types</div></li>
						<li class="info-list-item"><div class="item-text">Get treatment <span>today</span>, no need to leave home</div></li>
						<li class="info-list-item"><div class="item-text"><span>Save money,</span> easily compare prices and get the best offers here</div></li>
					</ul>
					<a href="all-providers.php" class="btn btn-cta mx-auto">See all providers</a>
				</div>
			</div>
		</div>
	</section>

	<?php include('_footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>