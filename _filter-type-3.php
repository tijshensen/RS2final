<?php
include('_dataset.php');


/*all-treatments.php*/

?>		

<div class="col-md-6 filters-container" id="filters-container">
	<div class="dropdown">
		<button class="dropdown-toggle btn-filter-search"  type="button" id="dropdownFilter4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Treatment type<img src="./img/arr-down.svg" alt="arrow">
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
			Category<img src="./img/arr-down.svg" alt="arrow">
		</button>
		<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownFilter1">
			<ul class="dropdown-list filter-list filter-4">
				<?php
				foreach ($rs_categories as $rs_category) 
				{ 
				?>
					<li class="dropdown-item">
						<label class="check">
							<input type="checkbox" data-filter-id="filter-<?php echo $rs_category['category_filter']; ?>" data-filter-title="<?php echo $rs_category['category_name']; ?>">
							<span class="filter"><?php echo $rs_category['category_name']; ?></span>
						</label>
					</li>
				<?php	
				}
				?>

			</ul>
		</div>
	</div>

</div>


<div class="col-md-10 ">
<span class="filters-span" >Selection:</span>
<span class="clear" style="padding-left: 20px;">Clear All Filters</span>
</div>

<div class="col-md-10 ">
<div class="btn-filters-container"></div>
</div>