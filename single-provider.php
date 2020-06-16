
<?php include('_header.php'); ?>

<body class="rs-index">
	<?php include('_menu.php');?>

<section class="providers-banner-section">
    <div class="container">
        <div class="row relative-block">
            <div class="sticker">
                <span class="price">$65 OFF</span>
                <span class="old-price">$95 <span>/VISIT</span></span>
                <div class="yellow-dashed-label">MAYSALE</div>
                <a href="#" class="btn-purple-arw">Visit <i class="icon-arrow-right-white"></i></a>
            </div>
            <div class="col-12 lg-hide">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Condition</li>
                            <li class="breadcrumb-item" aria-current="page">Depression</li>
                        </ol>
                    </nav>
                </div>
                <h1 class="h1">Roman <span> Review</span></h1>
            </div>
            <div class="col-lg-8 providers-banner-card">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Condition</li>
                            <li class="breadcrumb-item" aria-current="page">Depression</li>
                        </ol>
                    </nav>
                </div>
                <h1 class="h1">Roman <span> Review</span> </h1>
                <span class="providers-name">Roman Snapshot</span>
                <div class="providers-description">
                    Roman is a digital clinic revolutionizing men’s healthcare. See a doctor, get a prescription, and have it mailed right to your home in a few days. Safe, secure, affordable, and discreet. Healing starts here.
                </div>
                <div class="card-rating">
                    <span class="rating">9.9 
                        <span class="rating-total">/10</span>
                    </span>
                    <ul class="rating-list">
                        <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                        <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                        <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                        <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                        <li class="star"><img src="./svg/icon-star.svg" alt=""></li>
                    </ul>
                </div>
                <div class="aditional-block">
                    <span class="name">Specialities</span>
                    <span class="description">Erectile Dysfnction, Stop Smoking, Premature Ejaculation, Hair Loss</span>
                </div>
                <div class="number-lable-block">
                    <a href="#" class="simple-card-block">
                        <span class="block-number"><img src="./svg/icon-check.svg" alt=""></span>
                        <span class="block-description">Online doctor</span>
                    </a>
                    <a href="#" class="simple-card-block">
                        <span class="block-number"><img src="./svg/icon-check.svg" alt=""></span>
                        <span class="block-description">Digital Clinic</span>
                    </a>
                    <a href="#" class="simple-card-block">
                        <span class="block-number"><img src="./svg/icon-check.svg" alt=""></span>
                        <span class="block-description">ONline therapy</span>
                    </a>
                </div>   
            </div>
            <div class="col-lg-4 col-md-9 col-sm-10 sticky-block">
				
				
                <?php
				$x =0;
				$divlist = 'div';
				$style = 'provider-item-vertical';
				foreach ($rs_providers_cards as $rs_providers_card) 
				{ 
					include('_card-provider.php'); 
				$x++;
				if($x==1) break;
				} 
				?>
				
				
            </div>
            <div class="col-lg-8 collapse-section">
                <h3 class="h3">Conditions Treated at <span>Roman</span></h3>
                <div class="search-input-block col-md-8">
                    <input class="search-input" id="myInput" type="text" placeholder="">
                    <i class="icon-icon-search"></i>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                        <div class="collapse-name">Anxiety <div class="collapse-label green">new</div></div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample1">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                        <div class="collapse-name">Acne </div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample2">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                        <div class="collapse-name">A.d.D./A.D.H.D. </div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample4">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                        <div class="collapse-name">Acid Reflux </div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample5">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">
                        <div class="collapse-name">Concussion </div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample6">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">
                        <div class="collapse-name">Cellulitis</div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample7">         
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse-card">
                    <button class="collapse-btn collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">
                        <div class="collapse-name">Confusion </div>
                        <div class="collapse-description"><span>5 </span> Treatments at Roman</div>
                        <i class="icon-prev"></i>
                    </button>
                    <div class="collapse col-12" id="multiCollapseExample8">         
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 content-section">
                <div class="caption-block">
					<i class="icon-blue-logo"></i>
                    <h3 class="h3">More about Roman</h3>
                </div>
             <ul class="list-block">
                 <li class="list-item"><a href="#terms">Terms Of Use Of This Site</a></li>
                 <li class="list-item"><a href="#disclosure">Advertising Disclosure</a></li>
             </ul>
             <div class="content-block" id="terms">
                 <h4 class="h4">Terms Of Use Of This Site</h4>
                 <p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
             </div>
             <div class="content-block">
                 <h4 class="h4" id="disclosure">Advertising Disclosure</h4>
                 <p>We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.</p>
             </div>
             <img src="./img/mothers.jpg" alt="" class="content-img">
         </div>
        </div>
    </div>
</section>


<?php include('_footer-menu.php'); ?>
<script src="./js/jquery.min.js"></script> 
<script src="./js/script.js"></script> 

</body>

<?php include('_footer.php'); ?>