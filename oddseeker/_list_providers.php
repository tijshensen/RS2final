<div class="providers-list-cover">
    <div class="providers-list-item row">
        <div class="col-md-3">
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
                <a href="#" class="review-link">Read review</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pl-title"><?php echo $rs_provider_list['pl-list-title']; ?> </div>
            <ul class="key-list">
                <li class="key-item"><?php echo $rs_provider_list['pl-list-item-1']; ?></li>
                <li class="key-item"><?php echo $rs_provider_list['pl-list-item-2']; ?></li>
                <li class="key-item"><?php echo $rs_provider_list['pl-list-item-3']; ?></li>
            </ul>
        </div>
        <div class="col-xl-4 col-md-3">
            <div class="pl-title"><?php echo $rs_provider_list['pl-benefit-title']; ?></div>
            <div class="pl-price"><?php echo $rs_provider_list['pl-price-description']; ?><span><?php echo $rs_provider_list['pl-price']; ?></span></div>
            <div class="pl-bonus-block">
                <div class="yellow-dashed-label"><?php echo $rs_provider_list['pl-lable']; ?></div>
                <div class="pl-description"><?php echo $rs_provider_list['pl-adition']; ?></div>    
            </div>
              
        </div>
        <div class="col-xl-2 col-md-3 pl-btn-block">
            <a href="#" class="btn-cta btn-pink btn-sm">Get BONUS</a>
        </div>
        <div class="top-lable left"><?php echo $rs_provider_list['pl-top-label-left']; ?></div>
        <div class="top-lable right"><?php echo $rs_provider_list['pl-top-label-right']; ?></div>
    </div>
</div>
