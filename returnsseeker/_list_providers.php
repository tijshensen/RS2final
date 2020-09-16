<div class="providers-list-cover">
    <div class="providers-list-item row">
        <div class="col-md-3">
            <div class="pl-info-label"><?php echo $rs_provider_list['pl-label']; ?></div>
            <div class="pl-provider-name"><?php echo $rs_provider_list['pl-name']; ?></div>
            <img src="./img/<?php echo $rs_provider_list['pl-logo']; ?>" alt="" class="pl-logo">
            <div class="pl-rating">
                <ul class="rating-list">
                    <li class="rating-item"><i class="icon-icon-star"></i></li>
                    <li class="rating-item"><i class="icon-icon-star"></i></li>
                    <li class="rating-item"><i class="icon-icon-star"></i></li>
                    <li class="rating-item"><i class="icon-icon-star"></i></li>
                    <li class="rating-item"><i class="icon-icon-star"></i></li>
                </ul>
                <a href="page-single-provider.php" class="review-link">Read review</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pl-title"><?php echo $rs_provider_list['pl-price-title']; ?> </div>
            <div class="pl-price"><?php echo $rs_provider_list['pl-price']; ?></div>
            <div class="pl-description"><?php echo $rs_provider_list['pl-period']; ?></div>
            <div class="pl-description"><?php echo $rs_provider_list['pl-adition']; ?></div>
        </div>
        <div class="col-md-3">
            <div class="pl-title"><?php echo $rs_provider_list['pl-benefit-title']; ?></div>
            <div class="pl-benefit"><?php echo $rs_provider_list['pl-benefit-name']; ?> </div>
            <div class="pl-description"><?php echo $rs_provider_list['pl-benefit-description']; ?></div>

        </div>
        <div class="col-md-3 pl-btn-block">
        <a href="#" class="btn-cta btn-blue btn-sm">Open account</a>
        </div>
        <div class="top-lable left"><?php echo $rs_provider_list['pl-top-label-left']; ?></div>
        <div class="top-lable right"><?php echo $rs_provider_list['pl-top-label-right']; ?></div>
    </div>
</div>
