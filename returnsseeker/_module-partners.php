<section class="partners-section">
	<div class="container">
		<h3 class="h3">Companies you can <span>Trust</span></h3>
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
			<a href="all-providers.php" class="btn btn-cta">See All Companies</a>
		</div>
	</div>
</section>