
<?php include('_header.php'); ?>

<body class="rs-single-provider">
	<?php include('_menu.php');?>



<section class="providers-banner-section">

    <div class="container">
        <div class="row relative-block">

            <div class="col-12">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Condition</li>
                            <li class="breadcrumb-item" aria-current="page">Depression</li>
                        </ol>
                    </nav>
                </div>
                <h1 class="h1">Lemonaid Health <span> Review</span></h1>
			</div>
			<div class="col-lg-8 providers-hero-card">
				<img src="./img/logo-lemonaid.png" alt="" class="hero-logo">
				<div class="hero-name">San Francisco, CA  |  Founded 2013</div>
				<ul class="hero-rating-list">
					<li class="rating-item"><i class="icon-icon-star"></i></li>
					<li class="rating-item"><i class="icon-icon-star"></i></li>
					<li class="rating-item"><i class="icon-icon-star"></i></li>
					<li class="rating-item"><i class="icon-icon-star"></i></li>
					<li class="rating-item"><i class="icon-icon-star"></i></li>
				</ul>
				<h3 class="h3">Why We Like Them</h3>
				<div class="hero-description">Finally have a team that helps you lose weight  and improve your health without following a no-carb diet or tracking calories. Finally have a team that helps you lose weight  and improve your health without following a no-carb diet or tracking calories.</div>
				<div class="accepts-block">
					<div class="accepts-item">
						<i class="icon-accept"></i>
						<div class="description">Accepts <span>Insurance</span></div>
					</div>
					<div class="accepts-item">
						<i class="icon-money"></i>
						<div class="description">Accepts <span>HSA/FSA</span></div>
					</div>
				</div>
				<h3 class="h3">Products & services</h3>
				<ul class="check-list">
					<li class="check-item">Online doctor</li>
					<li class="check-item">Digital Clinic</li>
					<li class="check-item">Online Therapy</li>
				</ul>
			</div>
        
            <div class="col-lg-4 col-md-9 col-sm-10 sticky-block short">
				<div class="sale-card">
					<img src="./svg/mainLogo.svg" alt="" class="sale-provider-logo">
					<div class="sale-card-title">Special Offer</div>
					<div class="sale-description">How Much?</div>
					<div class="sale-old-price">$95/<span>SESSION</span></div>
					<div class="sale-price">$65 OFF</div>
					<div class="sale-description">Use coupon</div>
					<div class="yellow-dashed-label">Springsale</div>
					<div class="sale-description">Find out if Lemonaid Health is right for you</div>
					<a href="#" class="btn-cta-arw">Visit website<i class="icon-arrow-right-white"></i></a>
				</div>
            </div>
			
            <div class="col-lg-8 collapse-section">
                <!-- <h3 class="h3">Conditions Treated at <span>Roman</span></h3> -->
				<h3>Lemonaid Health Offers </h3>
				<h3>Treatment for <span>12</span>  Conditions</h3>
				<div class="rs-search-input-block col-md-8">
                    <input class="search-input" id="myInput" type="text" placeholder="">
                    <i class="icon-icon-search"></i>
                </div>


                <?php
				$x =0;
				foreach ($rs_conditions as $rs_condition) 
				{ 
				?>
	                <div class="collapse-card">
	                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample<?php echo $x;?>" aria-expanded="false" aria-controls="multiCollapseExample8">
	                        <div class="collapse-name"><?php echo $rs_condition['name']; ?></div>
	                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
	                        <i class="icon-prev"></i>
	                    </button>
	                    <div class="collapse col-12" id="multiCollapseExample<?php echo $x;?>">         
	                        <div class="card card-body">
	                            <div class="price-table-block row">
	                                <div class="table-name-block tmd-right col-lg-10">
	                                    <h5 class="h5">Online Therapy</h5>
	                                </div>
	                                <table class="table-price col-lg-10">
	                                    <tr class="table-row">
	                                        <td class="table-cell">Membership Fee</td>
	                                        <td class="table-cell"><span class="price">$95</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Single Session (Therapist)</td>
	                                        <td class="table-cell"><span class="price">$95</span><span class="period">/session</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Single Session (Psychiatrist)</td>
	                                        <td class="table-cell"><span class="price">$195</span><span class="period">/session</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Annual Package</td>
	                                        <td class="table-cell"><span class="price">$160</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Monthly Package</td>
	                                        <td class="table-cell"><span class="price">$190</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Weekly Package</td>
	                                        <td class="table-cell"><span class="price">$210</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                </table>
	                                <div class="col-lg-10">
	                                    <a href="#" class="link-compare">Compare with other providers</a>
	                                </div>
	                            </div>
	                            <div class="price-table-block row">
	                                <div class="table-name-block tmd-right col-lg-10">
	                                    <h5 class="h5">Digital Clinic</h5>
	                                    <h6 class="h6"><span>Get a new Prescription</span></h6>
	                                </div>
	                                <table class="table-price col-lg-10">
	                                    <tr class="table-row">
	                                        <td class="table-cell">Finateride (Generic Propecia)</td>
	                                        <td class="table-cell"><span class="price">$5</span><span class="period">/pill</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Levothyroxine</td>
	                                        <td class="table-cell"><span class="price">$95</span><span class="period">/pill</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Cialis (Daily) 5mg</td>
	                                        <td class="table-cell"><span class="price">$45</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Cialis (Daily) 10mg</td>
	                                        <td class="table-cell"><span class="price">$160</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Famciclovir 500 mg (Generic of Famvir)</td>
	                                        <td class="table-cell"><span class="price">$190</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                    <tr class="table-row">
	                                        <td class="table-cell">Valacyclovir 1g (Generic of Valtrex)</td>
	                                        <td class="table-cell"><span class="price">$210</span><span class="period">/MONTH</span></td>
	                                    </tr>
	                                </table>
	                                <div class="col-lg-10">
	                                    <a href="#" class="link-compare">Compare with other providers</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					
				<?php
				$x++;
				if($x==8) break;
				} 
				?>

            </div>
			
			
            <div class="col-lg-8 rs-content-section">
                <div class="rs-block-caption">
					<!-- <i class="icon-blue-logo"></i> -->
                    <h3 class="h3">More about</h3>
                </div>

             <ul class="rs-block-toc auto-toc">
                 <?php /* This '.auto-toc' div needs to be here to build the table of contents. The auto-toc needs to be within the '.content-section' div and will read the first title in the '.content-block' divs */ ?>
             </ul>
             <div class="rs-block-content" id="terms">
                 <h4 class="h4">Terms Of Use Of This Site</h4>
                 <p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
             </div>
             <div class="rs-block-content">
                 <h4 class="h4" id="disclosure">Advertising Disclosure</h4>
                 <p>We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.</p>
             </div>
             <img src="./img/mothers.jpg" alt="" class="content-img">

         </div>
        </div>
    </div>
</section>



<?php include('_footer-menu.php'); ?>

<div class="sticky-mobile-menu">
	<div class="sticky-inner">
	    <span class="price">$65 OFF</span>
	    <span class="old-price">$95 <span>/VISIT</span></span>
	    <div class="yellow-dashed-label">MAYSALE</div>
	    <a href="#" class="btn-cta-arw">Visit <i class="icon-arrow-right-white"></i></a>
	</div>
</div>


<?php include('_footer.php'); ?>
