<?php include('_dataset.php'); ?>
<?php include('_header.php'); ?>


<body class="rs-alphabet">
	<?php include('_menu.php');?>

    <section class="alphabet-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 header-block">
                    <h1 class="h1">See All <span>Conditions</span> </h1>
                    <span class="banner-description">Explore to see all of the health conditions you can treat online. Healing starts here.</span>
                </div>
            </div>
            <div class="alphabet-container">
                <div class="row justify-content-center">
                   
                    <!-- <div class="col-12 search-container"> -->
                    <div class="search-input-block col-md-12 col-lg-4">
                        <input class="search-input" id="myInput" type="text" placeholder="">
                        <i class="icon-icon-search"></i>
                    </div>
                   
                    <!-- </div> -->

                    <div class="col-lg-10 col-sm-11">
                        <ul class="medications-list" id="medications-list">
							
							<?php
							$previousFirstCharacter ='';
							foreach ($rs_conditions as $rs_condition) 
							{ 
								
								$firstCharacter = $rs_condition['condition_name'][0];
								if ($firstCharacter != $previousFirstCharacter){
								?>
		                            <li class="alphabet-section list" id="<?php echo $firstCharacter;?>">
		                                <span class="name-section alfabet"><?php echo $firstCharacter;?></span>
									</li>
								<?php
								}
								?>
								
								<li class="list">
                                <a href="single-condition.php" class="simple-card-block">
                                    <div class="simple-flex">
                                        <span class="block-name"><?php echo $rs_condition['condition_name']; ?></span>
                                    </div>
                                    <div class="numb-block">
                                        <span class="block-number">12</span>
                                        <span class="block-description">Treatment Providers</span>
                                    </div>
                                    <i class="icon-blueArrow arw-right"></i>
                                </a>
								</li>
								<?php	
								$previousFirstCharacter = $firstCharacter;
							}
							?>
						</ul>	
                    </div>

                    <div class="col-xs-12 col-sm-1 anchors-container">
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



	<?php include('_footer-menu.php'); ?>
    


<?php include('_footer.php'); ?>
<script src="./js/script.js"></script> 

</body>