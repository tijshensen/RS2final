<div class="side-categories-card">
	<div class="side-categories-card-inner">
		<h5 class="h5">Best<span> Investment</span>  Guides</h5>
	</div>

	<?php
	foreach ($rs_guides_cards as $rs_guides_card) 
	{ 
		include('_card-guide.php');
	} 
	?>
</div>