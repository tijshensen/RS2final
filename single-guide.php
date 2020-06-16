
<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>

<section class="provider-list-section">
	<div class="container">
		<div class="row  justify-content-center">
			<div class="col-md-10">
				<div class="section-header">
                    <div class="breadcrumb-container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Review</li>
                                <li class="breadcrumb-item" aria-current="page">Beauty News</li>
                            </ol>
                        </nav>
                        <!-- <span class="header-disclosure">Advertiser Disclosure</span> -->
                        <button type="button" class="btn-open-modal" data-toggle="modal" data-target="#exampleModal">
                            Advertiser Disclosure
                        </button>
                    </div>
                    <h1 class="h1">Best <span>Online Doctors</span></h1>
                    <span class="banner-description">
                        You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home.  
                    </span>                    
				</div>
			</div>
			
			<?php include('_filter-type-2.php'); ?>


			<div class="provider-list col-xl-11 col-lg-11 mx-auto">
            <?php
			$divlist = 'div';
			$style = 'provider-item-horizontal provider-item-stacked col-lg-12 col-md-8 mx-auto';
			foreach ($rs_providers_cards as $rs_providers_card) 
			{ 
				include('_card-provider.php'); 
			} 
			?>
			</div>
		</div>
	</div>
</section>

	<div class="bg-white our-mission shadow-top">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-7 section-header pt-5">
					<div class="logo-icon">
						<i class="icon-blue-logo"></i>
					</div>
					<h2 class="h2">Header one - paragraph 1</h2>
				</div>
				
				<div class="col-md-8 text-block mx-auto">
					<p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
					<p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-7 section-header">
					<div class="logo-icon">
						<i class="icon-blue-logo"></i>
					</div>
					<h2 class="h2">Header 2 - paragraph 2</h2>
				</div>
				
				<div class="col-md-8 text-block mx-auto">
					<p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
					<p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-7 section-header">
					<div class="logo-icon">
						<i class="icon-blue-logo"></i>
					</div>
					<h2 class="h2">Header 2 - paragraph 3</h2>
				</div>
				
				<div class="col-md-8 text-block mx-auto">
					<p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
					<h3>Header 3</h3>
					<p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
				</div>
			</div>
		</div>
    </div>
    <!-- Modal -->
    <?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>

	<!-- <script src="./js/owl.carousel.min.js"></script>  -->
	<script src="./js/script.js"></script> 

</body>

<?php include('_footer.php'); ?>