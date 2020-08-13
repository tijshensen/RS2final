

<div class="module-news <?php echo $bgcolor;?>">
	<div class="container">
		<div class="section-header">
			<div class="logo-icon">
				<img src="./svg/mini-logo.svg">
			</div>
			<h2 class="h2">Read Real Life Stories</h2>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-auto rs-trending-topics">
				<div class="fire-link">
					<img src="./svg/trending.svg"/>
					Trending topics</div>
				<div class="d-flex scroll-btn">
					<a href="#"  class="grey-link active">Covid 19</a>
					<a href="#" class="grey-link">Women’s health</a>
					<a href="#" class="grey-link">Men’s Health</a>
				</div>
			</div>
		</div>
		
		<div class="row md-row">

             <?php
			 	$n =0;
				foreach ($rs_news_cards as $rs_news_card) 
				{ 
				?>
				
				<div class="col-md-6 col-lg-4 " >
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

							<div class="col-9 col-md-12 card-content">
								<div class="flag purple <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
								<h4 class="news-title"><?php echo $rs_news_card['news_title']; ?></h4>
								<!--<div class="news-category" ><?php echo $rs_news_card['news_category']; ?></div>-->
								<span class="news-date"><?php echo $rs_news_card['news_time']; ?></span> 
								<span class="news-author"><?php echo $rs_news_card['news_author']; ?></span>
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
				<a href="#" class="btn btn-cta mx-auto">See all news</a>
			</div>
				
		</div>

	</div>
</div>
