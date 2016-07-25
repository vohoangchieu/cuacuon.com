<?php

include "./config.php";
include "./vnm-string-util.php";
$uri = explode("?", $_SERVER["REQUEST_URI"]);

$array_param = explode("/", $uri[0]);
for ($index = 0; $index < 5; $index++) {
    $array_param[] = '';
}
//var_dump($array_param);

if ($array_param[1] == "c" && trim($array_param[2]) != "") {
    include "./controller/category.php";
    include "./view/category.php";
} else if ($array_param[1] == "bc" && trim($array_param[2]) != "") {
    include "./controller/big-category.php";
    include "./view/big-category.php";
//} else if ($array_param[1] == "p" && trim($array_param[3]) != "") {
//    include "./controller/detail.php";
//    include "./view/detail.php";
//} else if ($array_param[1] == "am" && trim($array_param[2]) == "up") {
//    include "./controller/update-product.php";
//    include "./view/update-product.php";
} else if ($array_param[1] == "capnhat" && trim($array_param[2]) != "") {
    include "./controller/update-product.php";
    include "./view/update-product.php";
} else if ($array_param[1] == "themsanpham") {
    include "./controller/add-product.php";
    include "./view/add-product.php";
} else if ($array_param[1] == "quanlycategory") {
    include "./controller/manage-category.php";
    include "./view/manage-category.php";
} else if ($array_param[1] == "ajax") {
    if ($array_param[2] == "am") {
        if ($array_param[3] == "up") {
            include "./controller/ajax/update-product.php";
        } else if ($array_param[3] == "add-product") {
            include "./controller/ajax/add-product.php";
        } else if ($array_param[3] == "delete-product") {
            include "./controller/ajax/delete-product.php";
        } else if ($array_param[3] == "get-list-image.js") {
            include "./controller/ajax/get-list-image.php";
        } else if ($array_param[3] == "update-product-image-handler") {
            include "./controller/ajax/update-product-image-handler.php";
        } else if ($array_param[3] == "add-product-image-handler") {
            include "./controller/ajax/update-product-image-handler.php";
        }
    }
} else if ($array_param[1] == "search") {
    if (isset($_REQUEST["keyword"]) == false || $_REQUEST["keyword"] == "" || escape_data($_REQUEST["keyword"]) == "") {
//        include "./controller/home.php";
//        include "./view/home.php";

        var_dump($_REQUEST["keyword"]);
    } else {
        include "./controller/search.php";
        include "./view/search.php";
    }
} else if ($array_param[1] == $ggmap_link) {
    include "./controller/map.php";
    include "./view/map.php";
} else if ($array_param[1] == "test") {
    include "./test.php";
} else if (strpos($array_param[1], ".html") > -1 || $array_param[1] > 0) {
    $iscat = 0;
    foreach ($list_category as $category) {
        if (($array_param[1] == $category["alilas"])) {
            $iscat = 1;
            break;
        }
    }
    if ($iscat) {
        if ($mobile) {
            include "./mobile/controller/category.php";
            include "./mobile/view/category.php";
        } else {
            include "./controller/category.php";
            include "./view/category.php";
        }
    } else {
        if ($mobile) {
            include "./mobile/controller/detail.php";
            include "./mobile/view/detail.php";
        } else {
            include "./controller/detail.php";
            include "./view/detail.php";
        }
    }
} else if ($array_param[1] == "bang-gia-cua-cuon-dai-loan-cua-keo-cong-nghe-dai-loan") {
//    include "./controller/home.php";
    include "./view/bang-gia-cua-cuon.php";
} else {//if ($array_param[1] == "") {
    if ($mobile) {
        include "./mobile/controller/home.php";
        include "./mobile/view/home.php";
    } else {
        include "./controller/home.php";
        include "./view/home.php";
    }
} //else {
  //  header("HTTP/1.0 404 Not Found");
//}
//include "./view/home.php";
//include "./view/category.php";
//include "./view/detail.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>