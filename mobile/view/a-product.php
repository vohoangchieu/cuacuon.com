
<?php
if ($index % 3 == 0) {
    $class = "first";
} else if ($index % 3 == 1) {
    $class = "";
} else {
    $class = "last";
}
?>
<li class="post-293 product type-product status-publish has-post-thumbnail <?php echo $class?> shipping-taxable product-type-simple product-cat-cong-xep-inox-cao-cap instock">
    <a href="<?php echo $product["product_url"] ?>" >
        <img src="<?php echo $product["product_thumb"] ?>" class="attachment-shop_catalog wp-post-image" alt="><?php echo $product["name"] ?>">
        <h3 style="text-decoration: underline;"><?php echo $product["name"] ?></h3>
    </a>
 </li>
