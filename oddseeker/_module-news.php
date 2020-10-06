<div class="module-news bg-light-blue">
	<div class="container">
		<div class="section-header">
			<h2 class="h2">Gambling News, Tips, and Guides</h2>
		</div>
		<div class="news-topics">
			<a class="btn-news-topic red"  href="#">Covid 19</a>
			<a class="btn-news-topic" href="#">Women’s health</a>
			<a class="btn-news-topic" href="#">Men’s Health</a>
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
							<img src="./img/<?php echo $rs_news_card['news_img']; ?>"
								alt="" class="news-image"/>
							</div>

							<div class="col-9 col-md-12 card-content">
								<div class="flag <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
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
				<a href="#" class="btn btn-cta mx-auto">See MORE</a>
			</div>
				
		</div>

	</div>
</div>
