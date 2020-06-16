<ul class="dropdown-list filter-list filter-4">
    <?php
    foreach ($rs_categories as $rs_category) {
        ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="checkbox"
                       data-filter-id="filter-<?php echo $rs_category['category_filter']; ?>"
                       data-filter-title="<?php echo $rs_category['category_name']; ?>">
                <span class="filter"><?php echo $rs_category['category_name']; ?></span>
            </label>
        </li>
        <?php
    }
    ?>

</ul>