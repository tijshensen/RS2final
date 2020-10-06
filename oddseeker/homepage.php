
<?php 
	include('_header.php');
	include('_filter.php'); 
?>

<body class="oddseeker rs-index">
	<?php include('_menu.php');?>

	<section class="banner-color-section">
		<div class="container">
			<div class="banner-caption-block">
				<img src="svg/tambourine.svg" alt="" class="cros cros-1">
				<img src="svg/peak.svg" alt="" class="cros cros-2">
				<img src="svg/berry-big.svg" alt="" class="cros cros-3">
				<img src="svg/cross-big.svg" alt="" class="cros cros-4">
				<img src="svg/counter.svg" alt="" class="counter">
				<h1 class="h1">  THE BEST ONLINE <br> CASINOS & SPORTSBOOKS</h1>
				<div class="hero-mobile-text">GET FREE CASH!</div>
			</div>
		</div>	
	</section>
	
	<!-- <section class="hero-section">
		<div class="container">
			<div class="banner-caption-block">
				<h1 class="h1"> GET <span>FREE CASH</span> <br>AT THE BEST ONLINE GAMBLING SITES</h1>
				<div class="hero-mobile-text">GET FREE CASH!</div>
			</div>
		</div>	
	</section> -->

	<section class="rs-section-filter">
		<div class="container"> 
			<div class="row justify-content-center">
                <?php
                    showFilter([
						[
                            'title-filter' => 'State',
                            'title-mobile' => 'Your State',
                            'title' => 'Where do you live?',
                            'items' =>  $rs_state
						],
                        [
                            'title-filter' => 'Game',
                            'title-mobile' => 'Your Game',
                            'title' => 'What do you want to play?',
                            'items' =>  $rs_category
                        ]
                    ]);
                ?>
			</div>
		</div>
	</section>

	<section class="providers-list-section p-hom">
		<div class="container">  
			<div class="row">
				<div class="col-xl-10 col-lg-11 mx-auto">
					<button type="button" class="btn-open-modal au-width" data-toggle="modal" data-target="#disclosureModal">Advertiser Disclosure</button> 
				</div>
				<div class="result-list   col-xl-10 col-lg-11 mx-auto">
					<?php
						foreach ($rs_providers_list as $rs_provider_list) 
						{ 
							include('_list_providers.php'); 
						} 
					?>		
				</div> 
			</div>
			<div class="d-flex justify-content-center">
				<a href="all-guides.php" class="btn btn-cta">SEE ALL Sites</a>
			</div>
		</div>
	</section> 

	
	
	<?php 
	include('_module-news.php');
	?>
	
	<section class="guides-section pt-5">
		<div class="container">		
			<div class="section-header">				
				<h3 class="h3">Legal Online Gambling Categories</h3>
				<p class="description">Choose which games you like to play to find the best bonuses available online</p>
			</div>

				
				<div class="row justify-content-center">
					<div class="col-md-12 col-sm-8 guides-container">
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
				<a href="all-category.php" class="btn btn-cta">See All Categories</a>
			</div>
		</div>
	</section>

	<section class="states-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="section-header col-12">				
					<h3 class="h3">States Where Online Gambling is Legal</h3>
					<p class="description">Online Gambling is now legal across multiple state. Select your state to get free cash at the best online gambling sites</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-NewJersey.png" alt="">
					<div class="state-info-block">
						<div class="state-name">New Jersey</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-WestVirginia.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">West Virginia</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-3.png" alt="">
					<div class="state-info-block">
						<div class="state-name">Michigan</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-Pennsylvania.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">Pennsylvania</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-California.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">California</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-New-Hampshire.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">New Hampshire</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center collapse" id="collapseExample">
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-Nevada.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">Nevada</div>
						<div class="state-count">12 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-Delaware.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">Delaware</div>
						<div class="state-count">23 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-Illinois.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">Illinois</div>
						<div class="state-count">9 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-Iowa.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">Iowa</div>
						<div class="state-count">17 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-RhodeIsland.jpg" alt="">
					<div class="state-info-block">
						<div class="state-name">RhodeIs land</div>
						<div class="state-count">32 sites</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8">
					<div class="state-card">
					<img src="./img/flag-NewJersey.png" alt="">
					<div class="state-info-block">
						<div class="state-name">New Jersey</div>
						<div class="state-count">52 sites</div>
					</div>
					</div>
				</div>
			</div>
			
			<div class="d-flex justify-content-center">
				<button class="btn btn-cta" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">See All Companies</button>
			</div>
		</div>
	</section>
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

