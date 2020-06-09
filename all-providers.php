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
									
                                <div class="card-container provider-item single px-3 filter-anxiety filter-cellulitus filter-sleep">
                                    <div class="row">
                                        <div class="col-lg-4 provider-logo-block">
                                            <div class="special-info-block">
                                                <span class="info sale">20% OFF FIRST PURCHASE</span>
                                            </div>
                                            <img src="./img/logo-lemonaid.png" alt="" class="provider-logo">
                                            <div class="provider-name">Lemonaid Health</div>
                                            <div class="rating">
                                                <ul class="star-list">
                                                    <li class="star"><?php include('svg/icon-star.svg');?></li>
                                       			 	<li class="star"><?php include('svg/icon-star.svg');?></li>
													<li class="star"><?php include('svg/icon-star.svg');?></li>
													<li class="star"><?php include('svg/icon-star.svg');?></li>
													<li class="star"><?php include('svg/icon-star.svg');?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5  provider-info-block">
                                            
              
                                            <div class="description-block">
                                                <h5 class="h5">Why We Like Them</h5>
                                                <a href="#" class="review-link">Read review 
													<?php include('svg/icon-arrow-right.svg');?>
                                                </a>
                                                <span class="text">
                                                    Finally have a team that helps you lose weight and improve your health without following a no-carb diet or 
                                                </span>
                                            </div>
                                            <div class="description-block">
                                                <h5 class="h5">Specialities</h5>
                                                <span class="text">
                                                    Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety
                                                </span>
                                            </div>
                                            <div class="online-info-content">
                                                <div class="info-block">
                                                    <!-- <img src="./img/dr-online.svg" alt=""> -->
                                                    <span>Online Doctor</span>
                                                </div>
                                                <div class="info-block">
                                                    <!-- <img src="./img/mobile-online.svg" alt=""> -->
                                                    <span>Online pharmacy</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3  provider-price-block">
                                            <span class="price">$50 OFF</span>
                                            <a href="#" class="promo-code">Promo Code</a>
                                            <div class="yellow-dashed-label">SPRINGSALE</div>
                                            <span class="old-price">$95 <span>/VISIT</span></span>
                                            <a href="#" class="btn-purple-arw">Visit now<img src="./img/arrow-right-white.svg"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-container provider-item single px-3 filter-cellulitus filter-sleep">
                                    <div class="row">
                                        <div class="col-lg-4 provider-logo-block">
                                            <div class="special-info-block">
                                                <span class="info sale">20% OFF FIRST PURCHASE</span>
                                            </div>
                                            <img src="./img/logo-lemonaid.png" alt="" class="provider-logo">
                                            <div class="provider-name">Lemonaid Health</div>
                                            <div class="rating">
                                                <ul class="star-list">
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5  provider-info-block">
                                            

                                            <div class="description-block">
                                                <h5 class="h5">Why We Like Them</h5>
                                                <a href="#" class="review-link">Read review <svg width="12" height="11" viewBox="0 0 12 11" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.6666 4.78208L7.6919 0.20108C7.57837 0.0722193 7.42546 0 7.26616 0C7.10687 0 6.95396 0.0722193 6.84042 0.20108L6.47971 0.617081C6.42413 0.681661 6.38018 0.758301 6.35042 0.842575C6.32065 0.926849 6.30566 1.01709 6.3063 1.10808C6.30515 1.2005 6.31988 1.29226 6.34965 1.37808C6.37941 1.4639 6.42362 1.54207 6.47971 1.60808L8.79744 4.28708H1.43586C1.35808 4.28615 1.2809 4.30304 1.20882 4.33676C1.13674 4.37048 1.07117 4.42036 1.01592 4.48352C0.960678 4.54668 0.916849 4.62185 0.886977 4.70469C0.857106 4.78752 0.841785 4.87637 0.841904 4.96608V5.55208C0.838883 5.7374 0.899717 5.91654 1.01106 6.0502C1.12241 6.18386 1.27518 6.26114 1.43586 6.26508H8.82519L6.47798 8.96008C6.42232 9.024 6.37816 9.09997 6.34802 9.18363C6.31789 9.26729 6.30237 9.35699 6.30237 9.44758C6.30237 9.53817 6.31789 9.62787 6.34802 9.71153C6.37816 9.79519 6.42232 9.87116 6.47798 9.93508L6.83869 10.3501C6.95222 10.4789 7.10513 10.5512 7.26443 10.5512C7.42372 10.5512 7.57663 10.4789 7.69017 10.3501L11.6632 5.76808C11.776 5.63697 11.8392 5.45977 11.8392 5.27508C11.8392 5.0904 11.776 4.91319 11.6632 4.78208H11.6666Z"></path>
                                                    </svg>
                                                </a>
                                                <span class="text">
                                                    Finally have a team that helps you lose weight  and improve your health without following a no-carb diet or tracking calories.
                                                </span>
                                            </div>
                                            <div class="description-block">
                                                <h5 class="h5">Specialities</h5>
                                                <span class="text">
                                                    Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety
                                                </span>
                                            </div>
                                            <div class="online-info-content">
                                                <div class="info-block">
                                                    <!-- <img src="./img/dr-online.svg" alt=""> -->
                                                    <span>Online Doctor</span>
                                                </div>
                                                <div class="info-block">
                                                    <!-- <img src="./img/mobile-online.svg" alt=""> -->
                                                    <span>Online pharmacy</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3  provider-price-block">
                                            <span class="price">$50 OFF</span>
                                            <a href="#" class="promo-code">Promo Code</a>
                                            <div class="yellow-dashed-label">SPRINGSALE</div>
                                            <span class="old-price">$95 <span>/VISIT</span></span>
                                            <a href="single-provider.php" class="btn-purple-arw">Visit now<img src="./img/arrow-right-white.svg"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="provider-item card-container single px-3 filter-anxiety">
                                    <div class="row">
                                        <div class="col-lg-4 provider-logo-block">
                                            <div class="special-info-block">
                                                <span class="info sale">20% OFF FIRST PURCHASE</span>
                                            </div>
                                            <img src="./img/logo-lemonaid.png" alt="" class="provider-logo">
                                            <div class="provider-name">Lemonaid Health</div>
                                            <div class="rating">
                                                <ul class="star-list">
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5  provider-info-block">
                                            <div class="description-block">
                                                <h5 class="h5">Why We Like Them</h5>
                                                <a href="#" class="review-link">Read review <svg width="12" height="11" viewBox="0 0 12 11" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.6666 4.78208L7.6919 0.20108C7.57837 0.0722193 7.42546 0 7.26616 0C7.10687 0 6.95396 0.0722193 6.84042 0.20108L6.47971 0.617081C6.42413 0.681661 6.38018 0.758301 6.35042 0.842575C6.32065 0.926849 6.30566 1.01709 6.3063 1.10808C6.30515 1.2005 6.31988 1.29226 6.34965 1.37808C6.37941 1.4639 6.42362 1.54207 6.47971 1.60808L8.79744 4.28708H1.43586C1.35808 4.28615 1.2809 4.30304 1.20882 4.33676C1.13674 4.37048 1.07117 4.42036 1.01592 4.48352C0.960678 4.54668 0.916849 4.62185 0.886977 4.70469C0.857106 4.78752 0.841785 4.87637 0.841904 4.96608V5.55208C0.838883 5.7374 0.899717 5.91654 1.01106 6.0502C1.12241 6.18386 1.27518 6.26114 1.43586 6.26508H8.82519L6.47798 8.96008C6.42232 9.024 6.37816 9.09997 6.34802 9.18363C6.31789 9.26729 6.30237 9.35699 6.30237 9.44758C6.30237 9.53817 6.31789 9.62787 6.34802 9.71153C6.37816 9.79519 6.42232 9.87116 6.47798 9.93508L6.83869 10.3501C6.95222 10.4789 7.10513 10.5512 7.26443 10.5512C7.42372 10.5512 7.57663 10.4789 7.69017 10.3501L11.6632 5.76808C11.776 5.63697 11.8392 5.45977 11.8392 5.27508C11.8392 5.0904 11.776 4.91319 11.6632 4.78208H11.6666Z"></path>
                                                    </svg>
                                                </a>
                                                <span class="text">
                                                    Finally have a team that helps you lose weight  and improve your health without following a no-carb diet or tracking calories.
                                                </span>
                                            </div>
                                            <div class="description-block">
                                                <h5 class="h5">Specialities</h5>
                                                <span class="text">
                                                    Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety
                                                </span>
                                            </div>
                                            <div class="online-info-content">
                                                <div class="info-block">
                                                    <!-- <img src="./img/dr-online.svg" alt=""> -->
                                                    <span>Online Doctor</span>
                                                </div>
                                                <div class="info-block">
                                                    <!-- <img src="./img/mobile-online.svg" alt=""> -->
                                                    <span>Online pharmacy</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3  provider-price-block">
                                            <span class="price">$50 OFF</span>
                                            <a href="#" class="promo-code">Promo Code</a>
                                            <div class="yellow-dashed-label">SPRINGSALE</div>
                                            <span class="old-price">$95 <span>/VISIT</span></span>
                                            <a href="#" class="btn-purple-arw">Visit now<img src="./img/arrow-right-white.svg"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </li>
                            <li class="alphabet-section list" id="b">
                                <span class="name-section left-abs">B</span>
                                <div class="provider-item card-container single px-3 filter-sleep">
                                    <div class="row">
                                        <div class="col-lg-4 provider-logo-block">
                                            <div class="special-info-block">
                                                <img src="./img/nomb-1.png" alt=""  class="number">
                                                <span class="info sale">20% OFF FIRST PURCHASE</span>
                                            </div>
                                            <img src="./img/logo-lemonaid.png" alt="" class="provider-logo">
                                            <div class="provider-name">Lemonaid Health</div>
                                            <div class="rating">
                                                <ul class="star-list">
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                    <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5  provider-info-block">
                                            <div class="description-block">
                                                <h5 class="h5">Why We Like Them</h5>
                                                <a href="#" class="review-link">Read review <svg width="12" height="11" viewBox="0 0 12 11" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.6666 4.78208L7.6919 0.20108C7.57837 0.0722193 7.42546 0 7.26616 0C7.10687 0 6.95396 0.0722193 6.84042 0.20108L6.47971 0.617081C6.42413 0.681661 6.38018 0.758301 6.35042 0.842575C6.32065 0.926849 6.30566 1.01709 6.3063 1.10808C6.30515 1.2005 6.31988 1.29226 6.34965 1.37808C6.37941 1.4639 6.42362 1.54207 6.47971 1.60808L8.79744 4.28708H1.43586C1.35808 4.28615 1.2809 4.30304 1.20882 4.33676C1.13674 4.37048 1.07117 4.42036 1.01592 4.48352C0.960678 4.54668 0.916849 4.62185 0.886977 4.70469C0.857106 4.78752 0.841785 4.87637 0.841904 4.96608V5.55208C0.838883 5.7374 0.899717 5.91654 1.01106 6.0502C1.12241 6.18386 1.27518 6.26114 1.43586 6.26508H8.82519L6.47798 8.96008C6.42232 9.024 6.37816 9.09997 6.34802 9.18363C6.31789 9.26729 6.30237 9.35699 6.30237 9.44758C6.30237 9.53817 6.31789 9.62787 6.34802 9.71153C6.37816 9.79519 6.42232 9.87116 6.47798 9.93508L6.83869 10.3501C6.95222 10.4789 7.10513 10.5512 7.26443 10.5512C7.42372 10.5512 7.57663 10.4789 7.69017 10.3501L11.6632 5.76808C11.776 5.63697 11.8392 5.45977 11.8392 5.27508C11.8392 5.0904 11.776 4.91319 11.6632 4.78208H11.6666Z"></path>
                                                    </svg>
                                                </a>
                                                <span class="text">
                                                    Finally have a team that helps you lose weight  and improve your health without following a no-carb diet or tracking calories.
                                                </span>
                                            </div>
                                            <div class="description-block">
                                                <h5 class="h5">Specialities</h5>
                                                <span class="text">
                                                    Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety
                                                </span>
                                            </div>
                                            <div class="online-info-content">
                                                <div class="info-block">
                                                    <!-- <img src="./img/dr-online.svg" alt=""> -->
                                                    <span>Online Doctor</span>
                                                </div>
                                                <div class="info-block">
                                                    <!-- <img src="./img/mobile-online.svg" alt=""> -->
                                                    <span>Online pharmacy</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3  provider-price-block">
                                            <span class="price">$50 OFF</span>
                                            <a href="#" class="promo-code">Promo Code</a>
                                            <div class="yellow-dashed-label">SPRINGSALE</div>
                                            <span class="old-price">$95 <span>/VISIT</span></span>
                                            <a href="#" class="btn-purple-arw">Visit now<img src="./img/arrow-right-white.svg"></a>
                                        </div>
                                    </div>
                                </div>
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