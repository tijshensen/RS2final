<?php
function showFilterList($items, $listKey) {
?>
<ul class="dropdown-list filter-list filter-list-<?php echo $listKey; ?> filter-<?php echo $listKey; ?>">
    <?php
    foreach ($items as $item) {
    ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="checkbox"
                       data-filter-id="filter-<?php echo $item['filter']; ?>"
                       data-filter-title="<?php echo $item['name']; ?>">
                <span class="filter"><?php echo $item['name']; ?></span>
            </label>
        </li>
    <?php
    }
    ?>
</ul>
<?php
}
?>