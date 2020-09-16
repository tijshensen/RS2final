<div class="module-news bg-light-blue">
	<div class="container">
		<div class="section-header">
			
			<h2 class="rs-h2">Investing News, Tips, and Guides</h2>
		</div>
		
		<div class="row md-row">

             <?php
			 	$n =0;
				foreach ($rs_news_cards as $rs_news_card) 
				{ 
				?>
				
				<div class="col-md-6 col-lg-4 single-news-card" >
					<a href="#" class="card card-news">
						<div class="row">
							<div class="col-3 col-md-12 card-img-block">
							<img srcset="
								./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg 3019w,
								./img/<?php echo $rs_news_card['news_img']; ?>x2.jpg 2013w,
								./img/<?php echo $rs_news_card['news_img']; ?>x1.jpg 1006w
								"
								src="./img/<?php echo $rs_news_card['news_img']; ?>x3.jpg"
								alt="" class="news-image"/>
							</div>

							<div class="col-9 col-md-12">
								<div class="card-content">
									<div class="news-category <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
									<h4 class="news-title"><?php echo $rs_news_card['news_title']; ?></h4>
									<span class="news-date"><?php echo $rs_news_card['news_time']; ?></span> 
									<span class="news-author"><?php echo $rs_news_card['news_author']; ?></span>
								</div>
							</div>

						</div>
					</a>
				</div>
				<?php 
				$n++;
				if($n==3) break;
				} 
            ?>
			<div class="col-12 text-center d-flex">
				<a href="page-all-news.php" class="btn btn-cta mx-auto">See More</a>
			</div>
		</div>

	</div>
</div>
