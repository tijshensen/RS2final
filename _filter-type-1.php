<?php
include('_dataset.php');
?>
<div class="col-md-12">
    <div class="btn btn-toggle-filter" id="toggle-filter">
        <i class="icon-filter"></i>
        Filter By
    </div>
</div>
<div id="filters-container" class="col-md-10 filters-container d-none d-md-block">
    <div class="dropdown">
        <button class="dropdown-toggle btn-filter-search" type="button" id="dropdownFilter2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Search Condition <span class="count"></span><i class="icon-arr-down"></i> 
        </button>
        <div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter2">
            <?php include('_filter-1.php'); ?>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropdown-toggle btn-filter-search" type="button" id="dropdownFilter3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Search treatment <span class="count"></span><i class="icon-arr-down"></i>
        </button>
        <div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter3">
            <?php include('_filter-2.php'); ?>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropdown-toggle btn-filter-search" type="button" id="dropdownFilter4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Treatment type <span class="count"></span> <i class="icon-arr-down"></i>
        </button>
        <div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter4">
            <?php include('_filter-3.php'); ?>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropdown-toggle btn-filter-search" type="button" id="dropdownFilter1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Category <span class="count"></span> <i class="icon-arr-down"></i>
        </button>
        <div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter1">
            <?php include('_filter-4.php'); ?>
        </div>
    </div>
</div>

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
        <div class="filter-item-wrap" data-target="filter-item-mobile-1" data-title="Search Condition">
            <div class="filter-button-mobile-1 filter-button-mobile">
                <span class="filter-button-mobile-title">Search Condition</span> <span class="count"></span><i class="icon-arr-down"></i>
            </div>
        </div>
        <div class="filter-item-wrap" data-target="filter-item-mobile-2" data-title="Search treatment">
            <div class="filter-button-mobile-2 filter-button-mobile">
                Search treatment <span class="count"></span> <i class="icon-arr-down"></i>
            </div>
        </div>
        <div class="filter-item-wrap" data-target="filter-item-mobile-3" data-title="Treatment type">
            <div class="filter-button-mobile-3 filter-button-mobile">
                Treatment type <span class="count"></span> <i class="icon-arr-down"></i>
            </div>
        </div>
        <div class="filter-item-wrap" data-target="filter-item-mobile-4" data-title="Category">
            <div class="filter-button-mobile-4 filter-button-mobile">
                Category <span class="count"></span> <i class="icon-arr-down"></i>
            </div>
        </div>
    </div>
    <div class="filter-items" id="filters-items" style="display: none;">
        <div class="filters-mobile-hint">
            <div class="search-icon">
                <i class="icon-icon-search"></i>
                <!-- <svg width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/>
                </svg> -->
            </div>
            <input id="filters-search" type="text" name="search" data-target="" placeholder="Search">
        </div>
        <div class="filter-item-mobile-1 filter-item-mobile" data-id="1" style="display: none;">
            <?php include('_filter-1.php'); ?>
        </div>
        <div class="filter-item-mobile-2 filter-item-mobile" data-id="2" style="display: none;">
            <?php include('_filter-2.php'); ?>
        </div>
        <div class="filter-item-mobile-3 filter-item-mobile" data-id="3" style="display: none;">
            <?php include('_filter-3.php'); ?>
        </div>

        <div class="filter-item-mobile-4 filter-item-mobile" data-id="4" style="display: none;">
            <?php include('_filter-4.php'); ?>
        </div>
    </div>


    <div class="filters-mobile-footer">
        <div class="filters-checked-elements"></div>
        <div class="filters-mobile-footer-buttons">
            <div class="filters-mobile-footer-button filters-mobile-footer-button--clear">CLEAR</div>
            <div class="filters-mobile-footer-button filters-mobile-footer-button--apply">APPLY</div>
        </div>
    </div>
</div>

<div class="col-md-10  clear-filters-block">
    <span class="filters-span">Selection:</span>
    <a href="#" class="clear-filter" style="padding-left: 20px;">Clear All Filters</a>
</div>

<div class="col-md-10 ">
    <div class="btn-filters-container"></div>
</div>