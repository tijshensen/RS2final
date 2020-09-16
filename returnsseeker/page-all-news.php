
<?php include('_header.php'); ?>

<body class="returnsseeker rs-news-all">
	<?php include('_module-menu.php');?>
	<section class="news-banner">
        <div class="container">
            <h1 class="h1">Investing News, Tips, & Guides</h1>
			
			<!--
            <div class="news-banner-card bg-light-blue">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/firstnewsitem.png" alt="" class="news-b-img">
                    </div>
                    <div class="col-md-6 news-banner-info-block">
						<div class="info-category">COVID-19</div>
                        <h2 class="h2">List of Every Free Healthcare Offer for COVID-19 First Responders</h2>
                        <div class="info-description">
							<p>Our frontline workers and first responders need resources for managing stress and mental health now more than ever.</p>
                        </div>
                        <a href="page-single-news.php" class="btn-cta-arw">Continue reading</a>
                    </div>
                </div>
            </div>
			-->
            <a class="news-banner-card bg-light-blue" style="display: block; padding-bottom: 10px;" href="page-single-news.php">
                <div class="row" style="padding-bottom: 0px;">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/KqB5IKbkQigfRuEpYX4erGrMJLSi4nIpYJzSQ7SA.png" style="max-width: 100%; border-radius: 10px;"/>
                    </div>
                    <div class="col-md-6 news-banner-info-block" style="padding-top: 20px;">
						<div class="info-category">COVID-19</div>
                        <h2 class="h2">List of Every Free Healthcare Offer for COVID-19 First Responders</h2>

                        <div class="info-description">
							<p>Our frontline workers and first responders need resources for managing stress and mental health now more than ever.</p>
							<p class="fw-600">Continue reading &rarr;</p>
                        </div>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 rs-trending-topics">
                    <h4 class="h4 w-100">Categories</h4>
                    <div class="d-flex scroll-btn">
                        <a href="#"  class="grey-link purple">Covid 19</a>
                        <a href="#" class="grey-link red">Men’s Health</a>
                        <a href="#" class="grey-link green">Women’s health</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

	
	<section class="all-news-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  col-12 news-list">

                     <?php
						foreach ($rs_news_cards as $rs_news_card) 
						{ 
						?>
                            <a href="#" class="row news-card">
								<?php?>
									<img src="./img/<?php echo $rs_news_card['news_img']; ?>.jpg" alt="<?php echo $rs_news_card['news_title']; ?>" class="card-news-img">
                                    <div class="news-card-info-block" id="news-detail">
                                    <div class="news-label <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
                                    <h3 class="news-title"><?php echo $rs_news_card['news_title']; ?></h3>
									<div class="news-detail-block">
                                        <span class="card-author"><?php echo $rs_news_card['news_author']; ?></span>&nbsp;<span>on</span>&nbsp;<span class="card-date"> <?php echo $rs_news_card['news_time']; ?></span> 
                                    </div>
									
                                </div>
                            </a>
						<?php 
						} 
                    ?>


                    <a href="#" class="btn btn-cta">See all stories</a>
                </div>
				<div class="col-lg-4">
					<?php include('_module-sidebar-categories.php'); ?>
				</div>
            </div>
        </div>
    </section>

    
    <section class="section-news-categories ">
	    <div class="container">
			<div class="news-categories-block">
                <h5 class="h5">
                    News Categories
                </h5>
                <ul class="news-categories-list">	
					<?php
					foreach ($rs_guides_cards as $rs_guides_card) 
					{ 
					?>
					<li class="news-categories-item">
						<a href="<?php echo $rs_guides_card['guide_url']; ?>"><?php echo $rs_guides_card['guide_title']; ?>
						</a>
					</li>
					<?php	
					}
					?>
                </ul>
            </div>
		</div>
    </section>

	<?php include('_footer-menu.php'); ?>
	<?php include('_footer.php'); ?>

</body>