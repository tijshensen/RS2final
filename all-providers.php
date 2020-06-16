<?php 
include('_header.php'); 
?>
<body class="rs-alphabet">
	<?php include('_menu.php');?>

    <section class="alphabet-section providers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 header-block">
                    <h1 class="h1">Discover <span>354 Online Health Providers</span> </h1>
                    <span class="banner-description">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home</span>
                </div>

            	<?php include('_filter-type-1.php'); ?>   
			</div>
                
            <div class="alphabet-container">
                <div class="row justify-content-center p-relative">
                    <div class="col-lg-12">

                        <!-- Be sure to add the 'result-list' class to the ul with the search results -->
                        <ul class="medications-list result-list" id="medications-list">
                            <li class="alphabet-section list" id="a">
                                <span class="name-section left-abs">A</span>
                               
                                <!-- NOTE: Add the 'data-filter-id' from the filter as classes in the 'card-container' divs
                                In this case I've added: filter-anxiety filter-cellulitus filter-sleep -->
					            <?php
								$style = 'provider-item-horizontal provider-item-separate';
								foreach ($rs_providers_cards as $rs_providers_card) 
								{ 
									include('_card-provider.php'); 
								} 
								?>
									
							</li>		
                            <li class="alphabet-section list" id="b">
                                <span class="name-section left-abs">B</span>
                                
					            <?php
								$style = 'provider-item-horizontal provider-item-separate';
								foreach ($rs_providers_cards as $rs_providers_card) 
								{ 
									include('_card-provider.php'); 
								} 
								?>
                            </li>
                        </ul>    
                    </div>

                    <div class="anchors-container abs-right">
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
<!-- <script src="./js/jquery.min.js"></script>  -->
<script src="./js/script.js"></script> 

</body>