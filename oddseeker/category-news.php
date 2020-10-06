<?php include('_header.php'); ?>

<body class="rs-news-all">
	<?php include('_menu.php');?>

	<section class="news-banner">
        <div class="container">
            <h1 class="h1">Gambling News, Tips, and Guides</h1>
            <div class="news-banner-card">
                <div class="row">
                    <div class="col-md-6 news-banner-img-block">
                        <img src="./img/news-main.png" alt="" class="news-b-img">
                    </div>
                    <div class="col-lg-5 col-md-6 news-banner-info-block">
                        <span class="info-category">Sports Book</span>
                        <h6 class="h6">Big Ten to Start Football Season on October 24</h6>
                        
                        <div class="info-detail-block">
                            <span class="author">By Jon Bon Jovi</span>
                            <span class="data">25 March 2020</span>
                        </div>
                        <div class="info-description">
                        Our frontline workers and first responders need resources for managing stress and mental health now more than ever. 
                        </div>
                        <a href="category-news-single.php" class="btn-link">Continue reading</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="section-categories-btn">
        <div class="container">
            <h5 class="h5">Categories</h5>
            <div class="categories-topics">
                <a class="btn-categories purple"  href="#">Online casino</a>
                <a class="btn-categories red" href="#">Sports book</a>
                <a class="btn-categories green" href="#">Free casino</a>
                <a class="btn-categories pink" href="#">Free poker</a>
                <a class="btn-categories purple" href="#">Online casino</a>
                <a class="btn-categories red" href="#">Sports book</a>
                <a class="btn-categories green" href="#">Free casino</a>
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
                            <img src="./img/<?php echo $rs_news_card['news_img'];?>" alt="" class="card-news-img">
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
                    
                    <a href="#" class="btn-cta mx-auto">See all stories</a>
                </div>
                <div class="col-lg-4 col-md-10 side-info-card">
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
    
    <section class="section-categories-btn pb-lg-4">
        <div class="container">
            <h5 class="h5 mobile-hide">Categories</h5>
            <div class="row">
                <div class="col-lg-12 col-md-10 ">
                    <div class="categories-topics categories-topics-list-mobile">
                        <h4 class="categories-topics-title">NEWS CATEGORIES</h4>
                        <a class="btn-categories purple"  href="#">Online casino</a>
                        <a class="btn-categories red" href="#">Sports book</a>
                        <a class="btn-categories green" href="#">Free casino</a>
                        <a class="btn-categories pink" href="#">Free poker</a>
                        <a class="btn-categories purple" href="#">Online casino</a>
                        <a class="btn-categories red" href="#">Sports book</a>
                        <a class="btn-categories green" href="#">Free casino</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- </?php include('_frame.php');?> -->
	<?php include('_footer-menu.php'); ?>

</body>

<?php include('_footer.php'); ?>