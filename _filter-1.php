<ul class="dropdown-list filter-list filter-list-0 filter-1">
    <?php
    foreach ($rs_conditions as $rs_condition) {
        ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="checkbox"
                       data-filter-id="filter-<?php echo $rs_condition['condition_filter']; ?>"
                       data-filter-title="<?php echo $rs_condition['condition_name']; ?>">
                <span class="filter"><?php echo $rs_condition['condition_name']; ?></span>
            </label>
        </li>
        <?php
    }
    ?>
</ul>