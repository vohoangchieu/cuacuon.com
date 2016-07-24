<?php
auth();
$product_id = escape_data($array_param[2]);
$query_product_info = "select *from product where alilas='$product_id' or id='$product_id'";
$query_product_info_result = mysqli_query($db, $query_product_info);
if (mysqli_num_rows($query_product_info_result) == 0) {
   go_to_not_found_page();
//    header("Location: /c/$array_param[2]/");
//    var_dump($query_product_info);
    exit();
} else {
    $product_info = mysqli_fetch_array($query_product_info_result);
    $product_info["product_url"] = "/p/" . $product_info["category"] . "/" . $product_info['alilas'];
    $product_info["product_thumb"] = "/static/image/product/thumb_" .$product_info["id"] . ".jpg";
    $product_info["product_image"] = "/static/image/product/" .$product_info["id"] . ".jpg";
}