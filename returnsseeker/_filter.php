<?php
include('_filter-item.php');
include('_filter-mobile.php');

function showFilter($data) {
?>
<div class="col-md-12">
    <div class="btn btn-toggle-filter" id="toggle-filter">
        <i class="icon-filter"></i>
        Filter By
    </div>
</div>

<div id="filters-container" class="filters-container d-none d-md-block">
    <?php
        foreach($data as $key=>$filter) {
    ?>
    <div class="dropdown">
        <button class="dropdown-toggle btn-filter-search" type="button" id="dropdownFilter<?php echo $key; ?>>" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <?php echo $filter['title']; ?> <span class="count"></span><i class="icon-arr-down"></i>
        </button>
        <div class="dropdown-search dropdown-menu" aria-labelledby="<?php echo $key; ?>">

            <?php showFilterList($filter['items'], $key); ?>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<?php
showMobileFilter($data);
?>
<div class="row justify-content-center">

	<div class="col-md-auto  clear-filters-block">
	    <span class="filters-span">Selection:</span>

	</div>

	<div class="col-md-auto ">
	    <div class="btn-filters-container"></div>
	</div>

	<div class="col-md-auto  clear-filters-block">

	    <a href="#" class="clear-filter" style="padding-left: 20px;">Clear All Filters</a>
	</div>
</div>
<?php
}
?>