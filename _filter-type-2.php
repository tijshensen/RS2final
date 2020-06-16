<?php
include('_dataset.php');
?>		

<div class="btn btn-toggle-filter" id="toggle-filter">
	<i class="icon-filter"></i>
	Filter By
</div>

<div class="col-md-10 filters-container" id="filters-container">

	<div class="dropdown">
		<button class="dropdown-toggle btn-filter-search"  type="button" id="dropdownFilter2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Search Condition <i class="icon-arr-down"></i> 
		</button>
		<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter2">
			<svg width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
			<input type="text" placeholder="" class="search-input menuInput" onkeyup="filterCheckbox0()">

			<ul class="dropdown-list filter-list  filter-list-0 filter-1">
				<?php
				foreach ($rs_conditions as $rs_condition) 
				{ 
					?>
					<li class="dropdown-item">
						<label class="check">
							<input type="checkbox" data-filter-id="filter-<?php echo $rs_condition['condition_filter']; ?>" data-filter-title="<?php echo $rs_condition['condition_name']; ?>">
							<span class="filter"><?php echo $rs_condition['condition_name']; ?></span>
						</label>
					</li>
					<?php	
				}
				?>
			</ul>
		</div>
	</div>
	
	<div class="dropdown">
		<button class="dropdown-toggle btn-filter-search"  type="button" id="dropdownFilter3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Search treatment<i class="icon-arr-down"></i> 
		</button>
		<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter3">
			<svg width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
			<input type="text" placeholder="" class="search-input menuInput menuInput1" onkeyup="filterCheckboxOne()">

			<ul class="filter-list-one dropdown-list filter-list filter-2 ">
				<?php
				foreach ($rs_treatments as $rs_treatment) 
				{ 
					?>
					<li class="dropdown-item">
						<label class="check">
							<input type="checkbox" data-filter-id="filter-<?php echo $rs_treatment['treatment_filter']; ?>" data-filter-title="<?php echo $rs_treatment['treatment_name']; ?>">
							<span class="filter"><?php echo $rs_treatment['treatment_name']; ?></span>
						</label>
					</li>
					<?php	
				}
				?>
			</ul>
		</div>
	</div>
	
	<div class="dropdown">
		<button class="dropdown-toggle btn-filter-search"  type="button" id="dropdownFilter4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Treatment type<i class="icon-arr-down"></i> 
		</button>
		<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter4">
			<ul class="dropdown-list filter-list filter-3" >
				<?php
				foreach ($rs_treatment_types as $rs_treatment_type) 
				{ 
					?>
					<li class="dropdown-item">
						<label class="check">
							<input type="checkbox" data-filter-id="filter-<?php echo $rs_treatment_type['treatment_type_filter']; ?>" data-filter-title="<?php echo $rs_treatment_type['treatment_type_name']; ?>">
							<span class="filter"><?php echo $rs_treatment_type['treatment_type_name']; ?></span>
						</label>
					</li>
					<?php	
				}
				?>
			</ul>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropdown-toggle btn-filter-search"  type="button" id="dropdownFilter1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Insurance<i class="icon-arr-down"></i> 
		</button>
		<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter1">
			<ul class="dropdown-list filter-list">
				<li class="dropdown-item">							
					<label class="check">
						<input type="radio" name="insurance" data-filter-id="filter-insurance-yes" data-filter-title="Accepts Insurance">
						<span class="filter">Accepts Insurance</span>
					</label>
				</li>
				<li class="dropdown-item">
					<label class="check">
						<input type="radio" name="insurance" data-filter-id="filter-insurance-no" data-filter-title="Not Accepted">
						<span class="filter">Not Accepted</span>
					</label>
				</li>
			</ul>
		</div>
	</div>
</div>


<div class="col-md-10 ">
    <span class="filters-span">Selection:</span>
    <a href="#" class="clear-filter" style="padding-left: 20px;">Clear All Filters</a>
</div>

<div class="col-md-10 ">
<div class="btn-filters-container"></div>
</div>
