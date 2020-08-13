<?php include('_header.php'); ?>

<body class="rs-news-all">
	<?php include('_module-menu.php');?>

	<section class="news-banner">
        <div class="container">
            <h1 class="h1">All Men’s Health News</h1>
            <div class="news-banner-card">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <div class="news-label purple">URGENT CARE in NYC</div>
                        <img src="./img/news-gremma.jpg" alt="" class="news-b-img">
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
                        <a href="#" class="btn-cta-arw btn-small">Continue reading <i class="icon-arrow-right-white"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="section-label">
        <div class="container">
            <div class="trending-topics">
                <h5>Trending Topics</h5>
                <a class="btn-trending active">covid 19</a>
                <a class="btn-trending">Womens Heath</a>
                <a class="btn-trending">Sex</a>
                <a class="btn-trending">Mens Health</a>
            </div>
        </div>
    </section>

	<section class="all-news-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12 news-list">
                    <?php
					foreach ($rs_news_cards as $rs_news_card) 
					{
						?>
						<div class="row news-card">
							<img srcset="
								./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg 3019w,
								./img/<?php echo $rs_news_card['news_img']; ?>x2.jpg 2013w,
								./img/<?php echo $rs_news_card['news_img']; ?>x1.jpg 1006w
                                "
                                src="./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg" alt="" class="card-news-img">
							<div class="news-card-info-block" id="news-detail">
								<div class="news-label <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
								<h5 class="news-title"><?php echo $rs_news_card['news_title']; ?></h5>
								<div class="news-category" ><?php echo $rs_news_card['news_category']; ?></div>
								<div class="news-detail-block">
									<span class="card-author"><?php echo $rs_news_card['news_author']; ?></span>
									<span class="card-date"><?php echo $rs_news_card['news_time']; ?></span> 
								</div>
							</div>
						</div>
					<?php
                    }
                    ?>
                    <a href="#" class="btn btn-cta">See all news</a>
                </div>
                <div class="col-lg-4  side-info-card">
                    <img src="./svg/price.svg" alt="" class="card-info-img">
                    <h5 class="h5"><span>Telehealth </span>Guides <span>May 2020</span></h5>
                    <div class="side-info-description">
                        Review the Ultimate Telehealth Guides to Find the Best Online Treatments
                    </div>
                    
                    <?php
					foreach ($rs_guides_cards as $rs_guides_card) 
					{ 
					?>
                        <a href="#" class="card-guides-block">
                            <img src="./svg/<?php echo $rs_guides_card['guide_svg']; ?>" alt="" class="card-label-img">
                            <div class="description-block">
                                <div class="label-name"><?php echo $rs_guides_card['guide_title']; ?></div>
                                <span class="label-numb"><?php echo $rs_guides_card['guide_counts']; ?> providers</span>
                            </div>
                        </a>
					<?php 
					} 
					?>
                </div>
            </div>
        </div>
    </section>

	<section class="section-label">
        <div class="container">
            <div class="trending-topics">
                <h5>Trending Topics</h5>
                <a class="btn-trending active">covid 19</a>
                <a class="btn-trending">Womens Heath</a>
                <a class="btn-trending">Sex</a>
                <a class="btn-trending">Mens Health</a>
            </div>
        </div>
    </section>

    
    <section class="section-news-categories">
	    <div class="container">
			<div class="news-categories-block">
                    <h5 class="h5">
                        News Categories
                    </h5>
                    <ul class="news-categories-list">
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

	<?php include('_module-footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>