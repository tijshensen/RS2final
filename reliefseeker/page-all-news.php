
<?php include('_header.php'); ?>

<body class="rs-news-all">
	<?php include('_module-menu.php');?>
	<section class="news-banner">
        <div class="container">
            <h1 class="h1">All News</h1>
            <div class="news-banner-card">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/news-gremma.jpg" alt="" class="news-b-img">
						<div class="news-label purple">URGENT CARE in NYC</div>
                    </div>
                    <div class="col-md-6 news-banner-info-block">
                        <h6 class="h6">26 Home Products That May Trick People Into Thinking You Have Your Life Together.</h6>
                        <span class="info-category">Men’s health</span>
                        <div class="info-detail-block">
                            <span class="author">By Jon Bon Jovi</span>
                            <span class="data">3/25/2020  06:45 ET</span>
                        </div>
                        <div class="info-description">
                            Where can you shop for a chia-bearded version of Duck Dynasty’s Uncle Si, a Major League Baseball urn for your loved one’s ashes …
                        </div>
                        <a href="page-single-news.php" class="btn-cta-arw btn-small">Continue reading <i class="icon-arrow-right-white"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

	<div class="container">
		<div class="row">
			<div class="col-12 rs-trending-topics">
				<div class="fire-link">
					<img src="./svg/icon-trending.svg"/>
					Trending topics</div>
					<div class="d-flex scroll-btn">
						<a href="#"  class="grey-link active">Covid 19</a>
						<a href="#" class="grey-link">Women’s health</a>
						<a href="#" class="grey-link">Men’s Health</a>
					</div>
				</div>
			</div>
		</div>

	<section class="all-news-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12 news-list">

                     <?php
						foreach ($rs_news_cards as $rs_news_card) 
						{ 
						?>
                            <a href="#" class="row news-card">
                                <img srcset="
								./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg 3019w,
								./img/<?php echo $rs_news_card['news_img']; ?>x2.jpg 2013w,
								./img/<?php echo $rs_news_card['news_img']; ?>x1.jpg 1006w
								"
                                src="./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg" alt="" class="card-news-img">
                                <div class="news-card-info-block" id="news-detail">
                                    <div class="news-label <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
                                    <h5 class="news-title"><?php echo $rs_news_card['news_title']; ?></h5>
                                    <!-- <div class="news-category" ></?php echo $rs_news_card['news_category']; ?></div> -->
                                    <div class="news-detail-block">
                                        <span class="card-author"><?php echo $rs_news_card['news_author']; ?></span>
                                        <span class="card-date"><?php echo $rs_news_card['news_time']; ?></span> 
                                    </div>
                                </div>
                            </a>
						<?php 
						} 
                    ?>


                    <a href="#" class="btn btn-cta">See more news</a>
                </div>
                <div class="col-lg-4  side-info-card">
					<div class="side-info-card-inner">
                    	<img src="./svg/price.svg" alt="" class="card-info-img">
                    	<h5 class="h5"><span>Telehealth </span>Guides <span>May 2020</span></h5>
                    	<div class="side-info-description">
                       	 <p>Review the Ultimate Telehealth Guides to Find the Best Online Treatments</p>
                    	</div>
					</div>
                    
					<?php
					foreach ($rs_guides_cards as $rs_guides_card) 
					{ 
						include('_card-guide.php');
					} 
					?>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section-news-categories mt-5">
	    <div class="container">
			<div class="news-categories-block">
                    <h5 class="h5">
                        News Categories
                    </h5>
                    <ul class="news-categories-list">
                        <li class="news-categories-item">MENTAL HEALTH NEWS <img src="./svg/icon-trending.svg" alt=""></li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">Beauty news<img src="./svg/icon-trending.svg" alt=""></li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">CARDIOVASCULAR NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">Beauty news</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                        <li class="news-categories-item">MENTAL HEALTH NEWS</li>
                    </ul>
            </div>
		</div>
    </section>

	<?php include('_module-footer-menu.php');?>

    <?php include('_scripts.php'); ?>
    <?php include('_footer.php'); ?>