<?php include('_header.php'); ?>

<body class="rs-news-all">
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
    <section   itemscope itemtype="http://schema.org/Article" class="article-banner-section pt-3">
		<div class="container">
			<div class="row">
				<div class="article-content-section col-lg-8">

					<div class="artical-banner-block">
						<h1 class="article-name" itemprop="headline">Big Ten to Start Football Season on October 24</h1>
						<div class="data-publication">
							<span class="name">Last Updated:</span><time class="data"  itemprop="datePublished" datetime="2020-01-28T15:30:00+02:00">28/01/2020</time>
							<meta itemprop="dateModified" content="2020-01-28T15:30:00+02:00" />
						</div>
						
						<img itemprop="image" class="main-article-img" src="./img/news-main.png" alt="oddSeeker">
						<div class="article-detail-block" itemprop="author publisher" itemscope itemtype="https://schema.org/Organization">
							<div class="author-detail" itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
								<link itemprop="url" href="logo.gif" />
								<img  src="./img/curly-woman.jpg" alt="" class="author-img-main">
								<div class="autor-description" >
									<span class="author-role sm-hide">Author:</span>
									<span class="author-name" >Simon Weather</span>
								</div>
								
							</div>
							<div class="author-detail" >
								<div class="autor-description">
									<span class="author-role">Medically Reviewed By:</span>
									<span class="author-name" itemprop="name">Dr. Holschman</span>
									<meta itemprop="name" content="Simon Weathee" />
								</div>
							</div>
						</div>
					</div>
					<div class="links-block">
						<div class="socials-block-block">
							<a itemprop="url" href="#" class="social-link twitter"><i class="icon-icon-twitter"></i></a>
							<a itemprop="url" href="#" class="social-link facebook"><i class="icon-icon-facebook-1"></i></a>
							<a itemprop="url" href="#" class="social-link e-mail"><i class="icon-icon-email"></i></a>
						</div>
					</div>
					<div class="article-content">
						<p>
                        Our frontline workers and first responders need resources for managing stress and mental health now more than ever.  </p>
						<p>More than 2.6 billion people across the globe have now been asked to stay at home by their respective governments. But the outbreak is not only pushing us into uncharted territories, but it is also taking a toll on our mental health. What has been considered as an alternative to orthodox mental health care is now the mainstream mode of therapy that is Online Therapy.</p>
					</div>

					<div class="article-content">
						<h3 class="h3">Best Online Therapy Companies For Anxiety</h3>
						<p>Sars-CoV-2, more commonly called Coronavirus, has been spreading havoc across continents and taking a toll on fronts of life as we know it. Social distancing, taking care of your health, and hand hygiene are the new normal.  </p>
						<p>More than 2.6 billion people across the globe have now been asked to stay at home by their respective governments. But the outbreak is not only pushing us into uncharted territories, but it is also taking a toll on our mental health. What has been considered as an alternative to orthodox mental health care is now the mainstream mode of therapy that is Online Therapy.</p>
					</div>
					<div class="article-content">
						<h4 class="h4">Walmart healthcare will be a great low-cost option</h4>
						<p>Walmart Care Clinics are a boon to the uninsured with their discounted healthcare prices and convenience. It allows a patient to have some lab work done quickly over the weekend at almost $10 less than they would pay anywhere else. They can then have their prescription filled without having to travel to another location There are currently three Walmart Care Clinics operating – Georgia, South Carolina and Texas. However, there are plans for rapid expansion and based on Walmart’s massive network and infrastructure, it’s just a matter of time before Walmart’s slogan of “Save money, live better” becomes “Save money, live better and healthier”.</p>
					</div>
					<div class="links-block pl-lg-3">
						<span class="link-info">Share This Article:</span>
						<div class="socials-block-block">
							<a itemprop="url" href="#" class="social-link twitter"><i class="icon-icon-twitter"></i></a>
							<a itemprop="url" href="#" class="social-link facebook"><i class="icon-icon-facebook-1"></i></a>
							<a itemprop="url" href="#" class="social-link rss"><i class="icon-icon-rss"></i></a>
							<a itemprop="url" href="#" class="social-link e-mail"><i class="icon-icon-email"></i></a>
						</div>
					</div>
					<div class="author-card" >
						<img itemprop="url image" src="./img/curly-woman.jpg" alt="" class="author-img">
						<div class="information-block">
							<div class="author-card-header">
								<span class="author-name" >Simon Weather</span>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum</p>
					</div>
				</div>
				<div class="col-lg-4 mx-auto side-info-card">
                    <div class="search-card-container">
                        <h4 class="search-card-title">Play Now</h4>
                        <div class="search-card-description">Choose from over 9  alternative investments catetories and take control of your wealth today</div>
                        <?php
                            $x =0;
                            foreach ($rs_guides_cards as $rs_guides_card) 
                            { 
                            ?>						
                                <?php	
                                include('_card-search.php');
                                ?>
                            <?php 
                            $x++;
                            if($x==8) break;
                            } 
                        ?>
                        <a href="all-category.php" class="btn-cta mx-auto">SEE ALL Categories</a>
                    </div>
				</div>
			
			</div>
		</div>
	</section>
	<?php include('_footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>