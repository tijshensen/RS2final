<ul class="filter-list-one dropdown-list filter-list filter-2 ">
    <?php
    foreach ($rs_treatments as $rs_treatment) {
        ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="checkbox"
                       data-filter-id="filter-<?php echo $rs_treatment['treatment_filter']; ?>"
                       data-filter-title="<?php echo $rs_treatment['treatment_name']; ?>">
                <span class="filter"><?php echo $rs_treatment['treatment_name']; ?></span>
            </label>
        </li>
        <?php
    }
    ?>
</ul>