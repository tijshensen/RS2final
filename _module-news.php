

<div class="module-news">
	<div class="container">
		<div class="section-header" >
			<div class="logo-icon">
				<?php include('./img/blue-logo.svg');?> 
			</div>
			<h2 class="h2">Get The Latest <span> News in Healthcare</span></h2>
		</div>

		
		<div class="row md-row">
			<div class="col-12 link-block">
				<a href="#" class="fire-link">
					<img src="./img/Fire.png" alt="">
					Trending topics</a>
				<div class="d-flex">
					<a href="#"  class="grey-link active">Covid 19</a>
					<a href="#" class="grey-link">Women’s health</a>
					<a href="#" class="grey-link">Men’s Health</a>
				</div>
			</div>
			
			
             <?php
			 	$n =0;
				foreach ($rs_news_cards as $rs_news_card) 
				{ 
				?>
				
				<div class="col-lg-4 col-md-6" >
					<a href="#" class="card card-news">
						<div class="row">
							<div class="col-md-12 col-4 card-img-block">
								<img src="./img/<?php echo $rs_news_card['news_img']; ?>" alt="" class="news-image">
							<!-- <div class="col-12"> -->
								<!-- <div class="news-image" style="background-image: url('img/article-main.jpg') "></div> -->
							</div>
							<div class="col-md-12 col-8 card-content">
							<!-- <div class="col-12"> -->
								<div class="flag clearfix <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
								<h5 class="news-title"><?php echo $rs_news_card['news_title']; ?></h5>
								<div class="news-category" ><?php echo $rs_news_card['news_category']; ?></div>
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
				<a href="#" class="btn btn-purple mt-3 mx-auto">See all news</a>
			</div>
				
		</div>

	</div>
</div>
