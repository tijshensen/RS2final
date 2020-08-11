<?php include('_header.php'); ?>

<body class="returnsseeker rs-index">
	<?php include('_menu.php');?>
    <section class="guides-section ">
		<div class="container">		
			<div class="section-header">
				<div class="price-coin ">
					<img src="./svg/price.svg">
				</div>
				<h3 class="h3">Best Investment Guides  </h3>
                <h3 class="h3"><span>July 2020 </span></h3>
				<p class="description">Review the Ultimate Telehealth Guides to Find the Best Online Treatments</p>
			</div>

				
				<div class="row justify-content-center">
					<div class="col-12 guides-container">
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

    <section class="page-blog-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7 section-header">
                    <div class="logo-icon bg-color">
                        <img src="./svg/dollar.svg">
                    </div>
                    <h2 class="h2 mb">Finding  the Best <span>Investments Online</span></h2>
                </div>
                
                <div class="col-lg-7 col-md-8 text-block">
                    <p>Thanks for visiting ReliefSeeker.com! We are a small team of health seekers who are trying to take our medical care and wellness into our own hands. Over the last 5 years, there’s been a revolution in healthcare, with hundreds of new companies offering services online and delivering their treatments directly to consumers instead of through local pharmacies or networks of disparate salespeople and doctors. </p>
                    <p>We were sick and tired (literally) of mega conglomerates pulling levers behind the scenes and literally controlling all of our healthcare decisions with no accountability. </p>
                </div>

                <div class="col-lg-5 col-md-4 img-block-full">
                <img src="./img/content-tree.png" alt="">
                </div>
            </div>
        </div>
    </section>

	<?php include('_module-news.php');?>
	<?php include('_module-checklist.php');?>
    
    <?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>
</body>

