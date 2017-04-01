<?php

$product_id = escape_data($array_param[1]);
$query_product_info = "select *from product where alilas='$product_id' or id='$product_id' limit 1";
$query_product_info_result = mysqli_query($db, $query_product_info);
//var_dump($query_product_info);
if (mysqli_num_rows($query_product_info_result) == 0) {
//    go_to_not_found_page();
//      var_dump("xxx");exit;
    exit();
} else {
    $product_info = mysqli_fetch_array($query_product_info_result);
    $product_info["name"] = $product_info["name"];
    $product_info["product_url"] = "/" . $product_info['alilas'];
    $product_info["product_thumb"] = "/static/image/product/thumb_" . $product_info['id'] . ".jpg";
    $product_info["product_image"] = "/static/image/product/" . $product_info["id"] . ".jpg";
    if ($product_info["price"] > 0) {
        $product_info['price'] = number_format($product_info['price']) . " VNĐ";
    } else {
        $product_info['price'] = "LH $mobile_phone";
    }
    if ($product_info["meta_description"]) {
        $meta_description = $product_info["meta_description"];
    }
}
$category_id = ($product_info['category']);
$query_category_info = "select *from category where id='$category_id'";
$query_category_info_result = mysqli_query($db, $query_category_info);
if (mysqli_num_rows($query_category_info_result) == 0) {
    $category_info['id'] = '';
    $category_info['name'] = '';
    $category_info['type'] = '';
} else {
    $category_info = mysqli_fetch_array($query_category_info_result);
}
if ($product_info["title"]) {
    $title = $product_info["title"];
} else {
    $title = $category_info['name'] . " - " . $product_info['name'];
}

//var_dump(isset($category_info));
$num_product_per_page = 6;
$query_num_product = "select count(id) from product where category='$category_id'";
$query_num_product_result = mysqli_query($db, $query_num_product);
$row = mysqli_fetch_array($query_num_product_result);
$num_product = $row[0];
$num_page = (int) ($num_product / $num_product_per_page ) + 1;
//var_dump($num_product);
$page = 1; //$array_param[3];
//var_dump($page);
if ($page == '' || (int) $page < 1) {
    $page = 1;
}
$page = (int) $page;
if ($page > $num_page) {
    $page = $num_page;
}

$offset = ($page - 1) * $num_product_per_page;
//$category_info = mysqli_fetch_array($query_category_info_result);
$query_product = "select *from product where category='$category_id' limit $offset,$num_product_per_page";
//var_dump($query_product);
$query_result_product = mysqli_query($db, $query_product);
$list_category_product = get_list_product_from_query_result($query_result_product);


$query_left_slide = "select *from product order by show_in_slide desc limit 4";
$query_result_left_slide = mysqli_query($db, $query_left_slide);
$list_left_slide_product = get_list_product_from_query_result($query_result_left_slide);
?>
