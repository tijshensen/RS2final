<section class="partners-section bg-light-grey">
	<div class="container">
		<h3 class="h3">Top Free Money Online Casinos</h3>
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
				if($x==8) break;
				} 
			?>
		</div>
	</div>
</section>