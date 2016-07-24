<?php

auth();
$query="select max(id) from product";
$result =  mysqli_query($db, $query);
$row= mysqli_fetch_array($result);
$product_id = $row[0] + 1;
$title = "Thêm sản phẩm ".$product_id;

$uploaddir = $APPLICATION_PATH . "/static/image/product/";
$uploadfile = $uploaddir . $product_id . ".jpg";
if(file_exists($uploadfile)){
    $image="/static/image/product/". $product_id . ".jpg";
}else{
    $image="#";
}
