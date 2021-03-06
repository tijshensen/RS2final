<?php include('_header.php'); ?>

<body class="rs-about">
	<?php include('_module-menu.php');?>

	<section class="banner-color-section">
		<div class="container">
			<div class="banner-caption-block">
				<img src="svg/crose.svg" alt="" class="cros cros-1">
				<img src="svg/crose.svg" alt="" class="cros cros-2">
				<img src="svg/crose.svg" alt="" class="cros cros-3">
				<img src="svg/crose.svg" alt="" class="cros cros-4">
				<img src="svg/crose.svg" alt="" class="cros cros-5">
				<h1 class="h1">The World’s Largest Directory of  <span>Online Healthcare Providers</span></h1>
			</div>
		</div>	
	</section>

	<section class="page-nav-section">
		<div class="container">
			<ul class="nav-list">
				<li class="nav-item"><a href="#mission" class="nav-link">Mission</a></li>
				<li class="nav-item"><a href="#terms" class="nav-link">Terms of Use</a></li>
				<li class="nav-item"><a href="#advertising" class="nav-link">Advertising Disclosure</a></li>
				<li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
				<li class="nav-item"><a href="#reach" class="nav-link">How to Reach Us</a></li>
			</ul>
		</div>
	</section>

	<section class="mission-section" id="mission">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-11 col-md-11 mx-auto">
					<h2 class="h2">Our Mission</h2>
				</div>
				<div class="col-xl-5 col-lg-6  col-md-11  mission-description">
					<p>
						Relief Seeker has been reporting on online healthcare providers & treatments since 2019. This site does not 
						offer medical advice, for that, you should consult a healthcare professional, what we do is publish information 
						to help people find which healthcare services are available online, and which providers are offering them. We 
						review care providers so that our readers can be more informed when choosing which provider to get care from. 
						We also publish information regarding the regulatory landscape of online healthcare in America. We want to help 
						more people stay at the forefront of advancements and innovations in healthcare.ReliefSeeker.com is an privately 
						& independently owned business, not affiliated with any of the providers or companies we report on.
					</p>
					
				</div>
				<div class="col-lg-5 col-md-11 mission-img">
					<img class="img" src="./img/medical-stuff.png" alt="">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-8 col-md-10 adition-block mx-auto">
					<h3 class="h3">ReliefSeeker.com is NOT a healthcare provider. </h3>
					<div class="adition-description">
						The news & information on this site is not medial advice, it is for informational purposes only and is intended for the use of those 21 and older, and who are of sound mind and judgement when considering healthcare conditions and treatments.
					</div>
				</div>
			</div>
		</div>
	</section>

<!--
	<section class="categories-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<h2 class="h2">Get best In-Class Healthcare <span> At-Home</span></h2>
					<div class="descrition-capitalize">The World’s Largest Directory of Online Healthcare Providers</div>
					<a href="#" class="btn btn-cta desctop">See all Categories</a>
				</div>
				<div class="col-lg-4 page-single-category.php">
					<div class="simple-card">
						<img class="simple-card-img" src="./svg/smartphone.svg" /> 
						<div class="description-block">
							<span class="simple-card-description">Online <span>  Therapy</span></span>
							<div class="simple-card-block">
								<span class="block-number">12</span>
								<span class="block-description">Providers</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 card-container">
					<div class="simple-card">
						<img class="simple-card-img" src="./svg/smartphone.svg" /> 
						<div class="description-block">
							<span class="simple-card-description">Online <span>  Therapy</span></span>
							<div class="simple-card-block">
								<span class="block-number">12</span>
								<span class="block-description">Providers</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 card-container mobile">
					<div class="simple-card">
						<img class="simple-card-img" src="./svg/smartphone.svg" /> 
						<div class="description-block">
							<span class="simple-card-description">Online <span>  Therapy</span></span>
							<div class="simple-card-block">
								<span class="block-number">12</span>
								<span class="block-description">Providers</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 card-container mobile">
					<div class="simple-card">
						<img class="simple-card-img" src="./svg/smartphone.svg" /> 
						<div class="description-block">
							<span class="simple-card-description">Online <span>  Therapy</span></span>
							<div class="simple-card-block">
								<span class="block-number">12</span>
								<span class="block-description">Providers</span>
							</div>
						</div>
					</div>
				</div>


				<a href="#" class="btn btn-cta mobile">See all Categories</a>
			
			</div>
		</div>
	</section>
-->
	
	<section class="guides-section bg-light-blue">
		<div class="container">
			<h2 class="h2 text-center">Take Control of Your Health <span>Online</span></h2>
			<p class="rs-description text-center">Getting treatment is more affordable, convenient, and discreet than ever.<br/>Search by category to discover over 150 of the best online healthcare providers.</p>

				
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-10 col-sm-7 guides-container">
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

			<div class="d-flex justify-content-center">
				<a href="page-all-categories.php" class="btn btn-cta">See All Categories</a>
			</div>	
				
		</div>
	</section>

	<section class="terms-section" id="terms">
		<div class="container">
		<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="h2">Terms Of Use Of This Site</h2>
					<p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="advertising-section" id="advertising">
		<div class="container">
		<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="h2" >Advertising Disclosure</h2>
					<p>
						We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional 
						code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.
					</p>
				</div>
			</div>
		</div>
	</section>



	<section class="team-section bg-light-blue" id="team">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="h2">Meet Our Team</h2>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image28.png" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">Since 2011 Alicia has worked as a travel, health, and wellness writer & editor contributing to widely read digital publications such as The Spruce, The Balance and The Spruce Pets, VeryWell, and TripSavvy. Alicia is a marketing expert, entrepreneur, and avid traveler!

</p>
						
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image33.png" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">Since 2011 Alicia has worked as a travel, health, and wellness writer & editor contributing to widely read digital publications such as The Spruce, The Balance and The Spruce Pets, VeryWell, and TripSavvy. Alicia is a marketing expert, entrepreneur, and avid traveler!

 </p>
						
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/team6.jpg" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">LSince 2011 Alicia has worked as a travel, health, and wellness writer & editor contributing to widely read digital publications such as The Spruce, The Balance and The Spruce Pets, VeryWell, and TripSavvy. Alicia is a marketing expert, entrepreneur, and avid traveler!

</p>

					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image29.png" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">Trivesh is a copywriter based in Cape Town, South Africa. Since 2005 Trivesh has worked with hundreds of brands and publications covering a variety of  </p>

					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image32.png" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">Matt's a 2016 Grad of The State University of New York College at Brockport. Matt is a Financial Services Representative and freelance writer who cut his teeth </p>
						
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/team5.jpg" alt="">
					<div class="member-name">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
					</div>
					<div class="member-description">
						<h5 class="name">Simon Weather</h5>
						<div class="position">Sales manager</div>
						<p class="description">Matt's a 2016 Grad of The State University of New York College at Brockport. Matt is a Financial Services Representative and freelance writer who cut his teeth Matt is a Financial Services Representative and freelance writer who cut his teeth Matt is a Financial Services Representative and freelance writer who cut his teeth </p>

					</div>
				</div>
				
			</div>
		</div>
	</section>

<?php include('_module-form.php'); ?>

<?php include('_module-email-sign-up.php'); ?>
<?php include('_module-footer-menu.php'); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include('_scripts.php'); ?>
<?php include('_footer.php'); ?>

