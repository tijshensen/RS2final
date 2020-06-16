<ul class="dropdown-list filter-list filter-3">
    <?php
    foreach ($rs_treatment_types as $rs_treatment_type) {
        ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="checkbox"
                       data-filter-id="filter-<?php echo $rs_treatment_type['treatment_type_filter']; ?>"
                       data-filter-title="<?php echo $rs_treatment_type['treatment_type_name']; ?>">
                <span class="filter"><?php echo $rs_treatment_type['treatment_type_name']; ?></span>
            </label>
        </li>
        <?php
    }
    ?>
</ul>