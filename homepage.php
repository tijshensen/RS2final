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

<section class="partners-section">
	<div class="container">
		<h3 class="h3">Providers you can <span>trust</span></h3>
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
		<div class="d-flex">
			<a href="#" class="btn btn-cta">SEARCH BY CATEGORY</a>
		</div>
	</div>
</section>

<section class="guides-section">
	<div class="container">
		<h3 class="h3">Find the best <span>providers</span></h3>
		<p class="description">Search by Category to Discover Over 150 New Online Healthcare Providers </p>

			
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
		<div class="d-flex">
			<a href="#" class="btn btn-cta">See All Categories</a>
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