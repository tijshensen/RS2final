<?php
include('_header.php');
include('_filter.php');
?>


<body class="rs-all-treatments">
	<?php include('_module-menu.php');?>
	
	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-md-10 header-block">
					<h1 class="rs-h1">See All <span>Treatments</span> </h1>
					<div class="rs-description">Explore to see all of the health conditions you can treat online. Healing starts here.</div>
				</div>	
			</div>
		</div>
	</section>

	<section class="rs-section-filter">
		<div class="container"> 
			<div class="row justify-content-center">
	            <div class="col-md-4 ">
					<div class="rs-search-input-block ">
	               		<input class="search-input" id="myInput" type="text" placeholder="">
	                	<i class="icon-icon-search"></i>
					</div>
	            </div>
				<div class="col-md-6">
					<div class="row">
		                <?php
		                showFilter([
		                    [
		                        'title' => 'Treatment type',
		                        'items' =>  $rs_treatment_types
		                    ],
		                    [
		                        'title' => 'Category',
		                        'items' =>  $rs_categories
		                    ]
		                ]);
		                ?>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="rs-alphabet alphabet-section">
        <div class="container">
            <div class="alphabet-container">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-11 col-lg-10">

						<ul class="rs-list result-list" id="rs-list">
							<li class="alphabet-section list" id="a">
								<span class="name-section left-abs">A</span>

								<?php
								foreach ($rs_treatments as $rs_treatment)
								{
									include('_card-treatment.php');
								}
								?>

							</li>
							<li class="alphabet-section list" id="b">
								<span class="name-section left-abs">a</span>
								<?php
								foreach ($rs_treatments as $rs_treatment)
								{
									include('_card-treatment.php');
								}
								?>
							</li>
						</ul>
                    </div>

                    <div class="col-1 anchors-container">
                        <ul class="alphabet">
                            <?php foreach ($rs_provider_alphabet as $rs_letter) { ?>
                            <li class="letter"><a href="#<?php echo $rs_letter; ?>" class="letter-link"><?php echo $rs_letter; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



	<?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>