<?php
if(!isset($divlist)){
	$divlist = 'div';
}	
if(isset($style) && $style == 'provider-item-vertical') 
	{ 
		$cardtitle ="Why We Like Them";
		$cta= "Visit website";
	}
	else{
		$cardtitle ="Why We Like Them";
		$cta= "Visit website";
	}
?>

<?php // NOTE: Add the 'data-filter-id' from the filter as classes to the 'result-item' div (done right now by $rs_providers_card['provider_filters']) ?>
<!-- Add the 'result-item' class to each item -->
<<?php echo $divlist;?> class="result-item provider-item <?php if(isset($style)) { echo $style;}?> <?php echo $rs_providers_card['provider_filters']; ?>">
	<div class="row">
		<div class="col-lg-3 provider-logo-block">
			<div class="label-block">
				<div class="card-number for-full-card"><?php echo $rs_providers_card['provider_number']; ?></div> 
				<div class="special-info-label" >
					<span class="info <?php echo $rs_providers_card['provider_label_class']; ?>"><?php echo $rs_providers_card['provider_label']; ?></span>
				</div>
			</div>
			<div class="rs-card-logo">
				<img src="./img/<?php echo $rs_providers_card['provider_logo']; ?>" alt="" class="provider-logo">
			</div>
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
				<div class="rs-card-title "><?php echo $cardtitle;?></div> 
				<div class="rs-text">
					<?php echo $rs_providers_card['provider_why']; ?>
				</div>
				<a href="page-single-provider.php" class="review-link for-full-card">Read review <i class="icon-arrow-right"></i></a>
			</div>
		
							
		</div>

		<div class="col-lg-3 provider-price-block">
			<div class="price-item">
				<div class="old-price"><?php echo $rs_providers_card['provider_old']; ?> <span>/VISIT</span></div>
				<div class="price"><?php echo $rs_providers_card['provider_price']; ?></div>
			</div>
			<div class="promo-code for-full-card">Promo Code</div>
			<div class="yellow-dashed-label"><?php echo $rs_providers_card['provider_promo']; ?></div>
			<?php if(isset($style) && $style != 'provider-item-vertical'){?>
			<?php } ?>
			<a href="#" class="btn-cta-arw"><?php echo $cta;?><i class="icon-arrow-right-white"></i></a>
		</div>
		<div class="col-12 px-0 provider-additional-block">
			<div class="row p-0">
				<div class="col-lg-3 aditional-item">
					<div class="rs-speciality for-full-card">
						<div class="rs-card-caption">Insurance</div>
						<div class="rs-text">
							<?php echo $rs_providers_card['provider_insurance']; ?>
						</div>
					</div>
					<div class="rs-speciality for-full-card" >
						<div class="rs-card-caption">HSA/FSA</div>
						<div class="rs-text">
							<?php echo $rs_providers_card['provider_hs']; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-9 aditional-item">
					<div class="rs-speciality">
						<div class="rs-card-caption">Conditions</div>
						<div class="rs-text">
							<?php echo $rs_providers_card['provider_conditions']; ?>
						</div>
					</div>
					<div class="rs-speciality">
						<div class="rs-card-caption">Services</div>
						<div class="rs-text">
							<?php echo $rs_providers_card['provider_services']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</<?php echo $divlist;?>>