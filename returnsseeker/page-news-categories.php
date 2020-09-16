<?php include('_header.php'); ?>

<body class="returnsseeker rs-news-all">
	<?php include('_module-menu.php');?>

	<section class="news-banner">
        <div class="container">
            <h1 class="h1">Investing News, Tips, & Guides</h1>
            <div class="news-banner-card">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/news-gremma.jpg" alt="" class="news-b-img">
                    </div>
                    <div class="col-md-6 news-banner-info-block">
                        <span class="info-category">Investment Guides</span>
                        <h6 class="h6">26 Home Products That May Trick People Into Thinking You Have Your Life Together.</h6>
                        
                        <div class="info-detail-block">
                            <span class="author">By Jon Bon Jovi</span>
                            <span class="data">25 March 2020</span>
                        </div>
                        <div class="info-description">
                            Where can you shop for a chia-bearded version of Duck Dynasty’s Uncle Si, a Major League Baseball urn for your loved one’s ashes …
                        </div>
                        <a href="#" class="btn-cta-arw ">Continue reading</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="section-categories-btn">
        <div class="container">
            <h5 class="h5">Categories</h5>
            <div class="categories-topics">
                <a class="btn-categories purple">Investment guides</a>
                <a class="btn-categories red">Crypto Currency Exchange</a>
                <a class="btn-categories green">Robo trading</a>
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
								<div class="news-detail-block">
									<span class="card-author"><?php echo $rs_news_card['news_author']; ?></span>
									<span class="card-date"><?php echo $rs_news_card['news_time']; ?></span> 
								</div>
							</div>
						</div>
					<?php
                    }
                    ?>
                </div>
                <div class="col-lg-4 col-xl-3 ml-lg-auto  side-info-card">
                    <div class="search-card-container column-container">
                        <?php
                            $x =0;
                            foreach ($rs_search_cards as $rs_search_cards) 
                            { 
                            ?>						
                                <?php	
                                include('_card-search.php');
                                ?>
                            <?php 
                            $x++;
                            if($x==3) break;
                            } 
                        ?>
                    </div>
                </div>
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
                        <li class="news-categories-item">MENTAL HEALTH NEWS <img src="./svg/fire.svg" alt=""></li>
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
    <?php include('_frame.php');?>
	<?php include('_footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>