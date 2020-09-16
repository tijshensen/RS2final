<section class="partners-section">
	<div class="container">
		<h3 class="h2">Companies you can <span>Trust</span></h2>
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
			<a href="page-all-providers.php" class="btn btn-cta">See all companies</a>
		</div>
	</div>
</section>