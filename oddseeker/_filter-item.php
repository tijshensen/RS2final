<?php
function showFilterList($items, $listKey) {
?>
<ul class="dropdown-list filter-list filter-list-<?php echo $listKey; ?> filter-<?php echo $listKey; ?>">
    <?php
    foreach ($items as $item) {
    ?>
        <li class="dropdown-item">
            <label class="check">
                <input type="radio" 
                       value="<?php echo $item['name-mobile']; ?>"
                       name="<?php echo $item['radio-name']; ?>"
                       data-filter-id="filter-<?php echo $item['filter']; ?>"
                       data-filter-title="<?php echo $item['name']; ?>"                       
                       >
                <img class="filter-flag" src="./img/<?php echo $item['flag']; ?>" alt="">
                <span class="filter"><span class="desctop"><?php echo $item['name']; ?></span><span class="mobile"><?php echo $item['name-mobile']; ?></span></span>
            </label>
        </li>
    <?php
    }
    ?>
</ul>
<?php
}
?>