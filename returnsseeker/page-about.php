<?php include('_header.php'); ?>

<body class="returnsseeker rs-about">
	<?php include('_module-menu.php');?>

	
	<section class="banner-color-section">
		<div class="container">
			<div class="banner-caption-block">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-1">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-2">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-3">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-4">
				<img src="svg/fly-dollar.svg" alt="" class="cros cros-5">
				<h1 class="h1">The World’s Largest Directory of <br> <span>Online Invesment Companies</span></h1>
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
			<div class="row justify-content-center align-items-center">
				<div class="col-md-5  mission-description">
					<h2 class="h2">Our Mission</h2>
					<p>
						Relief Seeker has been reporting on online healthcare providers & treatments since 2019. This site does not offer medical advice, for that, you should consult a healthcare professional, what we do is publish information to help people find which healthcare services are available online, and which providers are offering them. We review care providers so that our readers can be more informed when choosing which provider to get care from. We also publish information regarding the regulatory landscape of online healthcare in America. 
	We want to help more people stay at the forefront of advancements and innovations in healthcare.ReliefSeeker.com is an privately & independently owned business, not affiliated with any of the providers or companies we report on.
					</p>
				</div>		
				<div class="col-md-5">
					<img src="./img/invest.png" style="margin-top: 40px;"/>
				</div>		
				
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-8 col-md-8 adition-block mx-auto">
					<h5 class="adition-title">ReturnsSeeker.com is NOT a financial advisor.  </h5>
					<div class="adition-description">
						The news & information on this site is not medial advice, it is for informational purposes only and is intended for the use of those 21 and older, and who are of sound mind and judgement when considering healthcare conditions and treatments.
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="guides-section bg-light-blue">
		<div class="container">		
			<div class="section-header">
				<h3 class="h2 text-center">Grow Your Wealth While You Sleep</h2>
				<p class="rs-description">Investing doesn’t have to be difficult. Choose from over 9  alternative investments catetories and take control of your wealth today</p>
			</div>

				
				<div class="row justify-content-center">
					<div class="col-12 guides-container">
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
			<div class="d-flex justify-content-center">
				<a href="all-guides.php" class="btn btn-cta">See All Categories</a>
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
					<h3 class="h2" >Advertising Disclosure</h2>
					<p>
						We are able to operate ReliefSeeker.com, thanks to funding from advertising relationships. Our funding comes from advertising relationships with healthcare providers.In some cases, if you click a link on our site, or use a promotional 
						code featured here to register or make a purchase at a provider’s website, we may receive financial compensation from that company. In some limited cases, we may sell clearly marked banner advertising space to other companies.We maintain a strict policy regarding our editorial content:Advertisers have no say over the content published on ReliefSeeker.comAdvertisers cannot ‘buy’ positive reviews - our reviews are independently.Advertisers cannot ‘buy’ news stories or sponsored articles.We aim to provide credible, unique, and objective information about online healthcare companies and legislation in the US.
					</p>
				</div>
			</div>
		</div>
	</section>



	<section class="team-section" id="team">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-12">
					<h3 class="h2">Meet our Team</h2>
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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>

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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>

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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>

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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>

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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>
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
						<p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, </p>

					</div>
				</div>
				
			</div>
		</div>
	</section>

<?php include('_module-form.php'); ?>

<?php include('_footer-menu.php'); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include('_footer.php'); ?>

</body>

