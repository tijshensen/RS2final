
<?php include('_header.php'); ?>

<body class="rs-news-all">
	<?php include('_module-menu.php');?>
	<section class="news-banner">
        <div class="container">
            <h1 class="h1">Telehealth News</h1>
            <div class="news-banner-card bg-light-blue">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/firstnewsitem.png" alt="" class="news-b-img">
						<!--<div class="news-label purple">URGENT CARE in NYC</div>-->
                    </div>
                    <div class="col-md-6 news-banner-info-block">
						<div class="info-category">COVID-19</div>
                        <h2 class="h2">List of Every Free Healthcare Offer for COVID-19 First Responders</h2>
                       	<!--
                        <div class="info-detail-block">
                            <span class="author">By Jon Bon Jovi</span>
                            <span class="data">3/25/2020  06:45 ET</span>
                        </div>
						-->
                        <div class="info-description">
							<p>Our frontline workers and first responders need resources for managing stress and mental health now more than ever.</p>
                        </div>
                        <a href="page-single-news.php" class="btn-cta-arw">Continue reading</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 rs-trending-topics">
                    <div class="fire-link w-100">
                        <img src="./svg/icon-trending.svg"/>
                        Trending Topics
                    </div>
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
								<?php
								//Huzaifa: Use the img srcset option to show optimized imaged for screen resolutions
								//For the template I used only one format.
								?>
								<!--
                                <img srcset="
								./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg 3019w,
								./img/<?php echo $rs_news_card['news_img']; ?>x2.jpg 2013w,
								./img/<?php echo $rs_news_card['news_img']; ?>x1.jpg 1006w
								"
                                src="./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg" alt="" class="card-news-img">
									-->
									<img src="./img/<?php echo $rs_news_card['news_img']; ?>.jpg" alt="<?php echo $rs_news_card['news_title']; ?>" class="card-news-img">
                                <div class="news-card-info-block" id="news-detail">
                                    <div class="news-label <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
                                    <h3 class="news-title"><?php echo $rs_news_card['news_title']; ?></h3>
                                    <!-- <div class="news-category" ></?php echo $rs_news_card['news_category']; ?></div> -->
									<div class="news-detail-block">
                                        <span class="card-author"><?php echo $rs_news_card['news_author']; ?></span>&nbsp;on&nbsp;<span class="card-date"><?php echo $rs_news_card['news_time']; ?></span> 
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

    
    <section class="section-news-categories mt-4">
	    <div class="container">
			<div class="news-categories-block">
                    <h5 class="h5">
                        News Categories
                    </h5>
                    <ul class="news-categories-list">
                        <li class="news-categories-item">Mental Health News <img src="./svg/icon-trending.svg" alt=""></li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Mental Health News</li>
						
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Cardiovascular News</li>
                        <li class="news-categories-item">Mental Health News</li>
						
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Cardiovascular News</li>
                        <li class="news-categories-item">Mental Health News </li>
                        <li class="news-categories-item">Beauty news</li>
						
                        <li class="news-categories-item">Cardiovascular News</li>
                        <li class="news-categories-item">Mental Health News <img src="./svg/icon-trending.svg" alt=""></li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Covid-19 news</li>
						
                        <li class="news-categories-item">Mental Health News</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Cardiovascular News</li>
						
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Cardiovascular News</li>
                        <li class="news-categories-item">Mental Health News </li>
						
                        <li class="news-categories-item">Covid-19 news</li>
                        <li class="news-categories-item">Cardiovascular News</li>
                        <li class="news-categories-item">Mental Health News</li>
                        <li class="news-categories-item">Beauty news</li>
                       
                    </ul>
            </div>
		</div>
    </section>

	<?php include('_module-email-sign-up.php'); ?>
	<?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>