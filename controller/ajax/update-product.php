<?php
auth();
header('Content-type: application/json');
//var-dump($_REQUEST);
$id = (int) $_REQUEST["id"];
if ($id <= 0) {
    response(1, "invalid id");
    return;
}

$name = escape_data($_REQUEST["name"]);
if ($name == "") {
    response(1, "invalid name");
    return;
}
$title = escape_data($_REQUEST["title"]);
if ($title == "") {
    response(1, "invalid title");
    return;
}
$alias = make_id_from_name($name);
if ($alias == "") {
    response(1, "invalid name");
    return;
}

$price = (int) $_REQUEST["price"];
if ($price < 0) {
    response(1, "invalid price");
    return;
}

$warranty = (int) $_REQUEST["warranty"];
if ($warranty < 0) {
    response(1, "invalid warranty");
    return;
}
$meta_description = escape_data($_REQUEST["meta_description"]);
$description = escape_data($_REQUEST["description"]);
////var-dump($meta_description);
$tag = escape_data($_REQUEST["tag"]);
//var-dump($tag);
$show_in_home = (int) $_REQUEST["show_in_home"];
if ($show_in_home < 0 || $show_in_home > 1) {
    response(1, "invalid show_in_home");
    return;
}
if ($show_in_home) {
    $show_in_home = current_millis();
}
$show_in_slide = (int) $_REQUEST["show_in_slide"];
if ($show_in_slide < 0 || $show_in_slide > 1) {
    response(1, "invalid show_in_slide");
    return;
}
if ($show_in_slide) {
    $show_in_slide = current_millis();
}

$enable = (int) $_REQUEST["enable"];
if ($enable < 0 || $enable > 1) {
    response(1, "invalid enable");
    return;
}
$category_id = $_REQUEST['category'];
$query_category_info = "select *from category where id='$category_id'";
$query_category_info_result = mysqli_query($db, $query_category_info);
if (mysqli_num_rows($query_category_info_result) == 0) {
    response(1, "category invalid");
    return;
}
$query_product_info = "select *from product where id='$id'";
$query_product_info_result = mysqli_query($db, $query_product_info);
if (mysqli_num_rows($query_product_info_result) == 0) {
    response(1, "invalid id");
    return;
} else {
    $product_info = mysqli_fetch_array($query_product_info_result);
}
$category = $product_info['category'];
$query = "update product set name='$name',title='$title',category=$category_id,price=$price,warranty='$warranty',tag='$tag',"
        . "meta_description='$meta_description',description='$description',"
        . "show_in_home=$show_in_home,show_in_slide=$show_in_slide,enable=$enable where id=$id";
$result = mysqli_query($db, $query);
if (mysqli_errno($db) == 0) {
    response(0, "/p/" . $category . "/" . $id);
} else {
    response(1, mysqli_error($db));
}

function response($code, $msg) {
    $resp["code"] = $code;
    $resp["msg"] = $msg;
    echo json_encode($resp);
}
?>

