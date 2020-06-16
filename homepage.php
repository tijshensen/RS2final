<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>

<section class="banner-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h1>Get Best In-Class <span>Healthcare</span> Online</h1>
				<span class="banner-description">Search the World’s Largest Directory of Over 250 Online Healthcare Providers and Start Treatment Today</span>
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
						<a href="single-guide.php" class="simple-card">
							<img class="simple-card-img" src="./svg/<?php echo $rs_guides_card['guide_svg']; ?>" /> 
							<div class="description-block">
								<div class="simple-card-description"><?php echo $rs_guides_card['guide_title']; ?></div>
								<div class="simple-card-block">
									<span class="block-number"><?php echo $rs_guides_card['guide_counts']; ?></span>
									<span class="block-description">Providers</span>
								</div>
							</div>
						</a>
					</div>
					<?php 
					$x++;
					if($x==4) break;
					} 
					?>
				</div>
			</div>
			<div class="col-xl-10 col-md-11 simple-btn-block">
				<a href="all-guides.php" class="btn btn-purple">See all Categories</a>
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
					<button type="button" class="header-disclosure" data-toggle="modal" data-target="#disclosureModal">
						Advertiser Disclosure
					</button>
					<div class="logo-icon">
						<i class="icon-blue-logo"></i><span>Healing starts here</span>
					</div>
					<h2 class="h2">Find the Right <span>Provider</span> for You</h2>
				</div>
			</div>
			
			<?php include('_filter-type-1.php'); ?>
			<ul class="provider-list col-lg-11 mx-auto">
                <?php
				$x =0;
				$divlist = 'li';
				$style = 'provider-item-horizontal provider-item-stacked col-lg-12 col-md-8 mx-auto';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					include('_card-provider.php'); 
				$x++;
				if($x==3) break;
				} 
				?>
			</ul>
			<div class="col-12 text-center d-flex" style="margin-top: 30px; margin-bottom: 30px;">
				<a href="all-providers.php" class="btn btn-purple mx-auto">See all providers</a>
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
						<i class="icon-blue-logo"></i><span>Our mission is clear</span>
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
	<?php include('_footer-menu.php'); ?>
    <!-- <script src="./js/jquery.min.js"></script>  -->
	<script src="./js/script.js"></script> 

</body>

<?php include('_footer.php'); ?>