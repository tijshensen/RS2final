<section class="rs-section-breadcrumb">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
                <div class="breadcrumb-container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">All items</li>
                            <li class="breadcrumb-item" aria-current="page">Single item</li>
                        </ol>
                    </nav>
					<?php if(isset($discloser) && $discloser == 'yes')
					{
					?>
                    <button type="button" class="btn-open-modal au-width" data-toggle="modal" data-target="#disclosureModal">
                        Advertiser Disclosure
                    </button>
					<?php 
					} 
					?>
                </div>
			</div>
		</div>
	</div>
</section>