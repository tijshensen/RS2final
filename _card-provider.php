<?php
if(!isset($divlist)){
	$divlist = 'div';
}	
?>

<<?php echo $divlist;?> class="provider-item <?php if(isset($style)) { echo $style;}?> <?php echo $rs_providers_card['provider_filters']; ?>">
	<div class="row">
		<div class="col-lg-3 provider-logo-block">
			<div class="special-info-label" >
				<span class="info bg-red <?php echo $rs_providers_card['provider_label_class']; ?>"><?php echo $rs_providers_card['provider_label']; ?></span>
			</div>

			<img src="./img/<?php echo $rs_providers_card['provider_logo']; ?>" alt="" class="provider-logo">
			<div class="provider-name"><?php echo $rs_providers_card['provider_title']; ?></div>
			<div class="rating">
				<ul class="star-list">
					<li class="star"><i class="icon-icon-star"></i></li>
					<li class="star"><i class="icon-icon-star"></i></li>
					<li class="star"><i class="icon-icon-star"></i></li>
					<li class="star"><i class="icon-icon-star"></i></li>
					<li class="star"><i class="icon-icon-star"></i></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-6 provider-info-block">
			<div class="description-block">
				<div class="rs-card-title ">Why We Like Them</div>
				<div class="rs-text">
					<?php echo $rs_providers_card['provider_why']; ?>
				</div>
				<a href="single-provider.php" class="review-link">Read review <i class="icon-arrow-right"></i></a>
			</div>
			<div class="rs-speciality" style="margin-top: 8px;">
				<div class="rs-card-title">Speciality</div>
				<div class="rs-text">
					<?php echo $rs_providers_card['provider_spec']; ?>
				</div>
			</div>
			<div class="rs-speciality" style="margin-top: 8px;">
				<div class="rs-card-title">Category</div>
				<div class="rs-text">
					<?php echo $rs_providers_card['provider_doctor']; ?>
				</div>
			</div>
							
		</div>

		<div class="col-lg-3 provider-price-block">
			<div class="price"><?php echo $rs_providers_card['provider_price']; ?></div>
			<div class="promo-code">Promo Code</div>
			<div class="yellow-dashed-label"><?php echo $rs_providers_card['provider_promo']; ?></div>
			<div class="old-price"><?php echo $rs_providers_card['provider_old']; ?> <span>/VISIT</span></div>
			<a href="#" class="btn-purple-arw">Visit now <i class="icon-arrow-right-white"></i></a>
		</div>
	</div>
</<?php echo $divlist;?>>