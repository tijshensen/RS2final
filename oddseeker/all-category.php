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
				
			</div>
		</div>
    </section>
    
    
	<section class="guides-section">
		<div class="container">		
			<div class="section-header">				
				<h2 class="h2">Find the Best Online Gambling Sites by Category</h2>
				<p class="description mt-2">You can get medications prescribed by an online doctor in 30 minutes & delivered discreetly to your home.  </p>
			</div>

				
				<div class="row justify-content-center">
					<div class="col-md-12 col-sm-8 guides-container">
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
		</div>
    </section>
    
    <section class="categories-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-11 bg-light-blue categories-link-block">
                    <h4 class="categories-link-title"><span>Table of Content</span></h4>
                    <ul class="categories-link-list">
                        <li class="categories-list-item"><a href="#categories-1" class="categories-list-link">What is Telemedicine?</a></li>
                        <li class="categories-list-item"><a href="#categories-2" class="categories-list-link">The three most common forms of telemedicine are:</a></li>
                        <li class="categories-list-item"><a href="#categories-3" class="categories-list-link">How does Telemedicine Work?</a></li>
                        <li class="categories-list-item"><a href="#categories-4" class="categories-list-link">Benefits of Telemedicine</a></li>
                        <li class="categories-list-item"><a href="#categories-5" class="categories-list-link">Ways Telemedicine may benefit you:</a></li>
                        <li class="categories-list-item"><a href="#categories-6" class="categories-list-link">Drawbacks of Telemedicine</a></li>
                        <li class="categories-list-item"><a href="#categories-7" class="categories-list-link">Telemedicine vs. Telehealth</a></li>
                        <li class="categories-list-item"><a href="#" class="categories-list-link">Applications of telemedicine</a></li>
                        <li class="categories-list-item"><a href="#" class="categories-list-link">Most common medical specialties using telemedicine</a></li>
                        <li class="categories-list-item"><a href="#" class="categories-list-link">Telehealth regulations and privacy laws</a></li>
                        <li class="categories-list-item"><a href="#" class="categories-list-link">The Future of Telehealth</a></li>
                    </ul>
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-1">What is Telemedicine?</h3>
                    <p>Telemedicine is a way to receive healthcare services remotely from anywhere at any time. Technological advancements have allowed for doctors to consult with patients using secure video software, online patient portals, and downloadable applications managed by companies that offer telemedicine services. With telemedicine, you are able to discuss in real-time with a doctor your medical conditions, symptoms, medication. The doctor is then able to come up with a treatment plan and prescribe medications when necessary. With telemedicine, you can receive medical care anytime and anywhere from the comfort of your home, school, or work.</p>
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-2">The three most common forms of telemedicine are:</h3>
                    <p>Interactive Medicine: this allows the patient and provider to consult in real-time.</p>
                    <p>Remote Patient Monitoring: with this providers are able to monitor patients that have medical conditions that can be monitored with home testing devices (eg, blood pressure and blood sugar).</p>
                    <p>Store and Forward: patient information can be shared electronically from provider to provider.</p>
                    <p id="categories-3">How does Telemedicine Work?</p>
                    <p>Telemedicine is not meant to replace your primary care physician or for emergency situations. Any condition that is urgent and requires hands-on attention (heart attack, Xrays, broken bones, etc) will need to be handled in person. Telemedicine is meant for non-urgent health conditions that you would traditionally go to your doctor or an urgent care clinic to be treated. For example, you think you might have pink eye, you are able to set up a virtual visit with your doctor where they can go over your symptoms and come up with a treatment plan all without having to leave the house.</p>                            
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-4">Benefits of Telemedicine</h3>
                    <p>There are many benefits of telemedicine to both patient and provider. Telemedicine allows patients who previously may have had limited access to health care services to have access right from their home. Providers may benefit from increased revenue as they are able to see more patients without needing to hire additional staff.</p>
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-6">Ways Telemedicine may benefit you:</h3>
                    <p>Telemedicine visits are typically less expensive than an office visit, trip to the ER or urgent care.</p>
                    <p>Limited access to health care due to living remotely, traveling for school/work.</p>
                    <p>Save on gas money and avoid wasting time in traffic.</p>
                    <p>Those who struggle with childcare or eldercare can consult with a doctor from the comfort of their home.</p>
                    <p>Telemedicine helps reduce the spread of contagious diseases. For example, you no longer will need to subject yourself to an office waiting room full of sick people and risk getting sick yourself.</p>
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-7">Drawbacks of Telemedicine</h3>
                    <p>One of the main disadvantages of telemedicine is losing the face to face contact for patients and providers. Without in-person contact there is room for error and mismanagement of some medical conditions. Patients may have a concern for the privacy of their sensitive health information. Many telemedicine organizations offer their services with HIPAA compliant software to ensure patient information is confidential. Telemedicine also has many drawbacks for providers and payers in regard to reimbursement, expense of technology, security concerns and physician licensing.</p>
                </div>
                <div class="col-lg-10 col-md-11 categories-content-block">
                    <h3 class="h3 categories-link" id="categories-8">Telemedicine vs. Telehealth</h3>
                    <p>These terms are often used interchangeably, but there is a definite difference between the two.</p>
                    <p>Telemedicine is defined by the World Health Organization (WHO) as “healing from a distance.” This permits patients to receive healthcare treatment without having to physically go into a doctor's office. </p>
                    <p>Telehealth is defined by HealthIT.gov as “the utilization of electronic information and telecommunications technologies to support and promote long-distance clinical health care, patient and professional health education, public health and health administration.” Telehealth encompasses telemedicine as well as non-clinical events like healthcare professionals training, education, and appointment scheduling. Telehealth is not a service, but a way to make advancements in patient care and healthcare education.</p>
                    <img src="./img/content-img-3.png" alt="">
                </div>
            </div>
        </div>
    </section>



	<?php include('_advertiser-disclosure.php'); ?>
	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>