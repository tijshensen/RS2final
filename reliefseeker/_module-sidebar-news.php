<div class="sidebar-news-card">
	<div class="side-categories-card-inner">
		<h5 class="h5">More<span> News</span></h5>
	</div>
	<?php
	$n=0;
	foreach ($rs_news_cards as $rs_news_card) 
	{ 
		?>
		<a href="#" class="row news-card">
			<img src="./img/<?php echo $rs_news_card['news_img']; ?>.jpg" alt="<?php echo $rs_news_card['news_title']; ?>" class="sidebar-news-img">
			<div class="sidebar-info-block">
				<div class="news-label <?php echo $rs_news_card['news_label_class']; ?>"><?php echo $rs_news_card['news_label']; ?></div>
				<h3 class="news-title"><?php echo $rs_news_card['news_title']; ?></h3>
			</div>
		</a>
		<?php 
		$n++;
		if($n==3) break;
	} 
	?>
</div>