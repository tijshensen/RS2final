<section class="rs-section-breadcrumb">
	<div class="container">
        <div class="breadcrumb-container">			
			<nav aria-label="breadcrumb" >
				<ol class="breadcrumb"  itemscope itemtype="http://schema.org/BreadcrumbList">
					<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="page-index.php"><span itemprop="name">Home</span><meta itemprop="position" content="1" /></a>
					</li>
					<li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="#"><span itemprop="name">All Items</span><meta itemprop="position" content="2" /></a>
					</li>
					<li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="#"><span itemprop="name">Single item</span><meta itemprop="position" content="3" /></a>
					</li>
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


