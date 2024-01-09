<div id="left_column">
    <div id="left_nav">
        <?php
			$category_set = Category::find_all_cat($db);

			while($category = $db->fetch_assoc_array($category_set)) {
		?>
        <ul>
            <li><a href="product_cat.php?id=<?php echo $category["cat_id"]  ?>"><?php echo $category["cat_name"]  ?></a>
            </li>
        </ul>
        <?php } ?>
    </div>
</div>