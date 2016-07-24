<?php
$keyword = strtolower(escape_data($_REQUEST["keyword"]));
//var_dump($keyword);
$keyword_a = filter_vnm($keyword);
$query_all_product = "select *from product ";
$query_all_product_result = mysqli_query($db, $query_all_product);

$list_search_product = get_list_product_from_query_result($query_all_product_result);
$num_product = count($list_search_product);
$l1 = array();
$l1a = array();
$l2 = array();
$l2a = array();
$l3 = array();
$l3a = array();
for ($index = 0; $index < $num_product; $index++) {
    $product = $list_search_product[$index];
    $name = strtolower($product['name']);
    $pos = strpos($name, $keyword);
//    var_dump("pos: $pos: $keyword,$name");
    if ($pos === 0) {
//        var_dump("push l1: pos: $pos: $keyword,$name");
        array_push($l1, $product);
        unset($list_search_product[$index]);
        continue;
    }
    if ($pos > 0) {
        array_push($l1a, $product);
        unset($list_search_product[$index]);
        continue;
    }
    $name_a = filter_vnm($name);
    $pos_a = strpos($name_a, $keyword_a);
//    var_dump($pos_a);
    if ($pos_a === 0) {
        array_push($l2, $product);
        unset($list_search_product[$index]);
        continue;
    }
    if ($pos_a > 0) {
        array_push($l2a, $product);
        unset($list_search_product[$index]);
        continue;
    }
}
//var_dump($l1);
$list_search_product = array_merge($l1, $l1a, $l2, $l2a);
$query_left_slide = "select *from product order by show_in_slide desc limit 8";
$query_result_left_slide = mysqli_query($db, $query_left_slide);
$list_left_slide_product = get_list_product_from_query_result($query_result_left_slide);
?>
