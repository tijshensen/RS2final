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
                    <div class="search-input-block col-md-10 col-lg-4 ml-md-5">
                        <input class="search-input" id="myInput" type="text" placeholder="">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"></path></svg>
                    </div>
                    <div class="col-lg-6 col-md-6 dr-right-block">
                        <img src="./img/dr-finger.svg" alt="" class="img-dr-right">
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
                                        <span class="block-nomber">12</span>
                                        <span class="block-description">Treatment Providers</span>
                                    </div>
                                    <img src="./img/blueArrow.svg" alt="" class="arw-right">
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