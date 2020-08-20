<section class="rs-section-breadcrumb">
	<div class="container">
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="page-index.php">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">All items</li>
                    <li class="breadcrumb-item" aria-current="page">Single item</li>
                </ol>
            </nav>
			<?php if(isset($discloser) && $discloser == 'yes')
			{
			?>
            <a class="rs-disclosure btn-open-modal au-width" data-toggle="modal" data-target="#disclosureModal">
                Advertiser Disclosure
            </a>
			<?php 
			} 
			?>
        </div>
	</div>
</section>