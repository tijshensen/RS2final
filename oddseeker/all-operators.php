<?php 
include('_header.php');
include('_filter.php');
include('_dataset.php');
?>
<body class="rs-all-providers">
	<?php include('_menu.php');?>

	<section class="rs-section-hero">
		<div class="container"> 
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="breadcrumb-container">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
								<li class="breadcrumb-item" aria-current="page">All investment Companies</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="col-md-6 mx-auto">
					<button type="button" class="btn-open-modal au-width" data-toggle="modal" data-target="#disclosureModal">Advertiser Disclosure</button> 
				</div>
				<div class="col-12">
					<h1 class="h1">All Legal Online Gambling Sites </h1>
					<div class="list-description">Play at the best legal online gambling sites in the U.S.A.</div>
				</div>	
			</div>
		</div>
	</section>

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

	<section class="providers-list-section">
		<div class="container">  
			<div class="row relative-block">
				
				<div class="result-list result-item col-10 ml-auto">
					<?php
						foreach ($rs_providers_list as $rs_provider_list) 
						{ 
							include('_list_providers.php'); 
						} 
					?>					
				</div> 
				<div class="col-1 col-sm-1 anchors-container ">
					<div id="sidebar">
						<div class="sidebar-inner">
							<ul class="alphabet">
								<?php foreach ($rs_provider_alphabet as $rs_letter) { ?>
									<li class="letter"><a href="#<?php echo $rs_letter; ?>" class="letter-link"><?php echo $rs_letter; ?></a></li>
									<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			 
		</div>
	</section> 

	<?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>