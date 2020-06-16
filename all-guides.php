<?php
    error_reporting(E_ALL);
?>
<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>
	<?php include('_dataset.php');?>




			

<section class="guide-banner-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 text-center header-block">
                <img src="./svg/price.svg" alt="">
				<h1 class="h1"><span>Telehealth</span> Guides <span>May 2020</span></h1>
				<p class="banner-description">Review the Ultimate Telehealth Guides to Find the Best Online Treatments</p>
			</div>
			<div class="col-lg-11 col-md-10 col-sm-7 card-section">
				<div class="row">
					
					
					<?php
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
					} 
					?>
					
					
				</div>
			</div>
		
		</div>
	</div>
</section>

<section class="page-blog-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7 section-header">
                <div class="logo-icon">
					<i class="icon-blue-logo"></i>
                </div>
                <h2 class="h2 mb">Finding You the Best Treatments in Healthcare & Wellness <span>Online</span></h2>
            </div>
            
            <div class="col-lg-7 col-md-8 text-block">
                <p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
                <p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
            </div>

            <div class="col-lg-5 col-md-4 img-block-full">
                <img src="./img/medical-stuff.png" alt="">
            </div>
        </div>
    </div>
</section>

<?php 
include('_module-news.php');
?>


	<?php include('_footer-menu.php'); ?>

	<script src="./js/script.js"></script> 

</body>

<?php include('_footer.php'); ?>