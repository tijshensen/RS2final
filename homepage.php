<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>
<section class="banner-color-section">
	<div class="container">
		<div class="banner-caption-block">
			<h1 class="h1">the future of <span>HEALTHCARE</span> is here</h1>
		</div>
	</div>	
</section>

<section class="search-card-section">
	<div class="container">

		<h3 class="h3">Take Control of Your Health <span>Online</span></h3>
		<p class="description">Getting treatment is more affordable, convenient, and discreet than ever</p>
		<div class="search-card-container">
			<?php
				$x =0;
				foreach ($rs_search_cards as $rs_search_cards) 
				{ 
				?>						
					<?php	
					include('_card-search.php');
					?>
				<?php 
				$x++;
				if($x==3) break;
				} 
			?>
		</div>
	</div>
</section>

<section class="partners-section bg-light-blue">
	<div class="container">
		<h3 class="h3">Providers You Can <span>Trust</span></h3>
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
			<a href="all-providers.php" class="btn btn-cta">See All Providers</a>
		</div>
	</div>
</section>

<section class="guides-section">
	<div class="container">
	
		<div class="section-header">
			<div class="logo-icon">
				<img src="./svg/mini-logo.svg">
			</div>
			<h3 class="h3">Find the Best <span>Providers</span></h3>
			<p class="description">Search by category to discover over 150 new online healthcare providers </p>
		</div>

			
			<div class="row justify-content-center">
				<div class="col-lg-11 col-md-10 col-sm-7 guides-container">
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
		</div>
		<div class="d-flex justify-content-center">
			<a href="all-guides.php" class="btn btn-cta">See All Categories</a>
		</div>
	</div>
</section>

<section class="conditions-section bg-light-blue">
	<div class="container">
	
		<div class="section-header">
			<div class="logo-icon">
				<img src="./svg/mini-logo.svg">
			</div>
			<h3 class="h3">Treat Hundreds of <span>Conditions</span></h3>
			<p class="description">Search by condition to compare providers and get the best treatment avaiable</p>
		</div>
			
			<div class="row justify-content-center">
				<div class="col-lg-11 col-md-10 col-sm-7 conditions-container">
					<div class="row">
						<?php
						$x =0;
						foreach ($rs_conditions as $rs_condition) 
						{ 
							if($x==6){
								$class="d-none d-sm-block";
							}
						?>
						<div class="col-lg-3 col-md-6 card-container <?php echo $class; ?>">
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
		<div class="d-flex justify-content-center">
			<a href="all-conditions.php" class="btn btn-cta">See All Conditions</a>
		</div>
	</div>
</section>

<!--	
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
-->

<?php 
include('_module-news.php');
?>

	<?php include('_advertiser-disclosure.php'); ?>


	<section class="conditional-list-section bg-light-blue">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 conditional-list-img-block">
					<img src="./img/list-item-img.jpg" alt="">
				</div>
				<div class="col-lg-7 conditional-list-block">
					<h5 class="h5">Don’t Wait Another Second.</h5>
					<div class="list-info-description">Find the best treatments in healthcare & wellness <span>online</span></div>
					<ul class="info-list">
						<li class="info-list-item"><div class="item-text">The <span>largest</span> collection of online healthcare providers</div></li>
						<li class="info-list-item"><div class="item-text"><span>Quick search</span> by condition, treatment or treatment types</div></li>
						<li class="info-list-item"><div class="item-text">Get treatment <span>today</span>, no need to leave home</div></li>
						<li class="info-list-item"><div class="item-text"><span>Save money,</span> easily compare prices and get the best offers here</div></li>
					</ul>
					<a href="all-conditions.php" class="btn btn-cta mx-auto">See all conditions</a>
				</div>
			</div>
		</div>
	</section>

	<?php include('_footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>