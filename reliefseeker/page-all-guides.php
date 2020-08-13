<?php
    error_reporting(E_ALL);
?>
<?php include('_header.php'); ?>

<body class="rs-all-guides">
	<?php include('_module-menu.php');?>



<section class="rs-section-hero">
	<div class="container"> 
		<div class="row justify-content-center">
			<div class="col-md-10 text-center header-block">
				<img src="./svg/price.svg">
				<h1 class="h1"><span>Telehealth</span> Guides <span>May 2020</span></h1>
				<div class="rs-description">Review the Ultimate Telehealth Guides to Find the Best Online Treatments</div>
			</div>	
		</div>
	</div>
</section>
			

<section class="guide-banner-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-10 col-sm-7 card-section">
				<div class="row">
					
					<?php
					foreach ($rs_guides_cards as $rs_guides_card) 
					{ 
					?>
					<div class="col-lg-3 col-md-6 card-container">
						<?php	
						include('_card-guide.php');
						?>
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
                <img src="./img/medical-stuff.png">
            </div>
        </div>
    </div>
</section>

<?php 
include('_module-news.php');
?>

<?php
include('_module-footer-menu.php'); 
?>

</body>

<?php include('_footer.php'); ?>