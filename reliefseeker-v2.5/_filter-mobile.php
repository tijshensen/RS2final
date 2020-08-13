<?php
function showMobileFilter($data) {
?>
<div id="filters-container-mobile" class="filters-container-mobile d-md-none" style="display:none;">
    <div class="filters-mobile-heading">
        <div id="filters-go-back-button" style="display: none;"><i class="icon-arr-down"></i></div>
        <span id="top-title">FILTERS</span>
        <div id="close-mobile-filters" class="btn btn-close"></div>
    </div>
    <div class="filters-buttons">
        <div class="filters-mobile-hint">
            Make a selection to Find the right provider for you.
        </div>
        <?php
            foreach($data as $key=>$filter) {
        ?>
            <div class="filter-item-wrap" data-target="filter-item-mobile-<?php echo $key;?>" data-title="<?php echo $filter['title'];?>">
                <div class="filter-button-mobile-<?php echo $key;?> filter-button-mobile">
                    <span class="filter-button-mobile-title">
                        <?php echo $filter['title'];?>
                    </span> <span class="count"></span>
                    <i class="icon-arr-down"></i>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <div class="filter-items" id="filters-items" style="display: none;">
        <div class="filters-mobile-hint">
            <div class="search-icon">
                <i class="icon-icon-search"></i>
            </div>
            <input id="filters-search" type="text" name="search" data-target="" placeholder="Search">
        </div>
        <?php
            foreach($data as $key=>$filter) {
        ?>
        <div class="filter-item-mobile-<?php echo $key; ?> filter-item-mobile" data-id="<?php echo $key; ?>" style="display: none;">
            <?php showFilterList($filter['items'], $key); ?>
        </div>
        <?php
            }
        ?>
    </div>

    <div class="filters-mobile-footer">
        <div class="filters-checked-elements"></div>
        <div class="filters-mobile-footer-buttons">
            <div class="filters-mobile-footer-button filters-mobile-footer-button--clear">CLEAR</div>
            <div class="filters-mobile-footer-button filters-mobile-footer-button--apply">APPLY</div>
        </div>
    </div>
</div>
<?php
}
?>