<?php
$category_id = escape_data($array_param[2]);
if($category_id=="bosch"){
    $type="0";
    $category_info["type"]="0";
    $category_info["id"]="bosch";
    $category_info["name"]="Sản phẩm Bosch";
}else{
    $type="1";
    $category_info["type"]="1";
    $category_info["id"]="Skil";
    $category_info["name"]="Sản phẩm Skil";  
}

//$query_category_info = "select *from category where id='$category_id'";
//$query_category_info_result = mysqli_query($db, $query_category_info);
//if (mysqli_num_rows($query_category_info_result) == 0) {
//    //go_to_not_found_page();
//    exit();
//}
//$category_info = mysqli_fetch_array($query_category_info_result);
$num_product_per_page = 30;
$query_num_product = "select count(id) from product where type='$type'";
$query_num_product_result = mysqli_query($db, $query_num_product);
$row = mysqli_fetch_array($query_num_product_result);
$num_product = $row[0];
$num_page = (int) ($num_product / $num_product_per_page )+ 1;
//var_dump($num_product);
$page = $array_param[3];
//var_dump($page);
if ($page == '' || (int)$page < 1) {
    $page = 1;
}
$page=(int)$page;
if ($page > $num_page) {
    $page = $num_page;
}

$offset = ($page - 1) * $num_product_per_page;

$query_product = "select *from product where type='$type' limit $offset,$num_product_per_page";
//var_dump($query_product);
$query_result_product = mysqli_query($db, $query_product);
$list_category_product = get_list_product_from_query_result($query_result_product);


$query_left_slide = "select *from product order by show_in_slide desc limit 8";
$query_result_left_slide = mysqli_query($db, $query_left_slide);
$list_left_slide_product = get_list_product_from_query_result($query_result_left_slide);
?>