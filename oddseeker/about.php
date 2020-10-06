<?php include('_header.php'); ?>

<body class="rs-about">
	<?php include('_menu.php');?>

	<section class="hero-section">
		<div class="container">
			<div class="banner-caption-block">
				<h1 class="h2"> The World’s Largest Directory of Legal Online Gambling Sites</h1>
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
			<div class="row justify-content-center align-items: center">
				<div class="col-xl-10 col-lg-11 col-md-11 mx-auto">
					<h3 class="h3 mb-1">Our Mission</h3>
				</div>
				<div class="col-xl-5 col-lg-6  col-md-11  mission-description">
					<p>
						Relief Seeker has been reporting on online healthcare providers & treatments since 2019. This site does not offer medical 
						advice, for that, you should consult a healthcare professional, what we do is publish information to help people find which 
						healthcare services are available online, and which providers are offering them. We review care providers so that our readers 
						can be more informed when choosing which provider to get care from. We also publish information regarding the regulatory landscape 
						of online healthcare in America. We want to help more people stay at the forefront of advancements and innovations in healthcare.
						ReliefSeeker.com is an privately & independently owned business, not affiliated with any of the providers or companies we report on.
					</p>
					
				</div>
				<div class="col-lg-5 col-md-11 mission-img">
					<img class="img" src="./img/content-img-2.png" alt="">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-7 col-md-10 adition-block mx-auto">
					<h5 class="adition-title">OddsSeeker.com is NOT a gambling site.  </h5>
					<div class="adition-description">
					The news & information on this site is not medial advice, it is for informational purposes only and is intended for the use of those 21 and older, and who are of sound mind and judgement when considering healthcare conditions and treatments.
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="guides-section pt-5">
		<div class="container">		
			<div class="section-header">				
				<h3 class="h3 mb-0">Legal Online Gambling Categories</h3>
				<p class="description mw-100">Choose which games you like to play to find the best bonuses available online</p>
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
			<div class="d-flex justify-content-center mt-lg-4">
				<a href="all-category.php" class="btn btn-cta">See All Categories</a>
			</div>
		</div>
	</section>

	<section class="terms-section pt-4" id="terms">
		<div class="container">
		<div class="row">
				<div class="col-md-9 mx-auto">
					<h3 class="h3">Terms Of Use Of This Site</h3>
					<p>ReliefSeeker.com does not offer medical advice. The contents of the ReliefSeeker.com Site, such as text, illustrations, images, icons, and other materials created by ReliefSeeker.com or obtained from ReliefSeeker.com’s licensors, and other materials contained on the ReliefSeeker.com Site (collectively, “Content”) are for informational purposes only. The Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a physician or other qualified health provider with any questions you may have regarding a medical condition or treatment. Never disregard professional medical advice or delay in seeking it because of something you have read on the ReliefSeeker.com Site!If you think you, or someone you know, may have a medical emergency, call 911 immediately (in USA). ReliefSeeker.com does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on the Site. ReliefSeeker.com may rank a corporate entity above another, however ReliefSeeker.com does not warrant or recommend the health services that are provided by the employees, agents, contractors, or persons otherwise affiliated with that corporate entity. Reliance on any information provided by ReliefSeeker.com, ReliefSeeker.com employees, others appearing on the Site at the invitation of ReliefSeeker.com, or other visitors to the Site is solely at your own risk.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="advertising-section" id="advertising">
		<div class="container">
		<div class="row">
				<div class="col-md-9 mx-auto">
					<h3 class="h3" >Advertising Disclosure</h3>
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
					<h3 class="h3">Meet our Team</h3>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image28.png" alt="">
					<div class="member-name">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image33.png" alt="">
					<div class="member-name">
						<h5 class="name">Alexandra Goldberg</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Alexandra Goldberg</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/team6.jpg" alt="">
					<div class="member-name">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image29.png" alt="">
					<div class="member-name">
						<h5 class="name">Rachel dobrosevic</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Rachel dobrosevic</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/image32.png" alt="">
					<div class="member-name">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Tijs Hensen</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<img class="member-img" src="./img/team5.jpg" alt="">
					<div class="member-name">
						<h5 class="name">Alexandra Goldberg</h5>
						<div class="position">HEAD of UX experience</div>
					</div>
					<div class="member-description">
						<h5 class="name">Alexandra Goldberg</h5>
						<div class="position">HEAD of UX experience</div>
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="form-section" id="reach">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<form class="form">
						<h3 class="h3">How To Reach Us</h3>
						<input class="form-input" type="text" name="name" placeholder="NAME" required>
						<input class="form-input" type="email" name="email" placeholder="E-MAIL" required>
						<textarea class="form-textarea" name="message" placeholder="MESSAGE" required></textarea>
						<div class="send-block">
							<div class="g-recaptcha" data-sitekey="6LfF--0UAAAAANvDndvb8Ogje1R-iQLzKYORtqL6"></div>
							<button class="btn btn-cta-arw">Send  </button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 form-block">
					<img src="./svg/logoOdd.svg" alt="OddSeeker">"
					<h5 class="h5">Write Us</h5>
					<span class="reach-info">OddSeeker.com</span>
					<span class="reach-info">2093 Philadelphia Pike #2021,</span>
					<span class="reach-info">Claymont, DE 19703</span>
				</div>
			</div>
		</div>
	</section>

<?php include('_footer-menu.php'); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include('_footer.php'); ?>

</body>

