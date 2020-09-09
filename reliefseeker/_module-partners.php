<section class="partners-section">
	<div class="container">
		<h2 class="h2">Providers You Can <span>Trust</span></h2>
		<p class="rs-description">Search by condition to compare providers and get the best treatment avaiable</p>
		<div class="partners-container">
			<?php
				$x =0;
				foreach ($rs_provider_link as $rs_provider_link) 
				{ 
				?>						
					<?php	
					include('_link_provider.php');
					?>
				<?php 
				$x++;
				if($x==10) break;
				} 
			?>
		</div>
		<div class="d-flex justify-content-center">
			<a href="page-all-providers.php" class="btn btn-cta">See All Providers</a>
		</div>
	</div>
</section>