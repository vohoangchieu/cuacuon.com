<?php

auth();
header('Content-type: application/json');
//var-dump($_REQUEST);
$id = (int) $_REQUEST["id"];
if ($id <= 0) {
    response(1, "invalid id");
    return;
}


$query_product_info = "delete from product where id='$id' limit 1";
$query_product_info_result = mysqli_query($db, $query_product_info);

if (mysqli_errno($db)) {
    response(1, mysqli_error($db));
    return;
}
$uploaddir = $APPLICATION_PATH . "/static/image/product/";
$uploadfile = $uploaddir . $id . ".jpg";
$uploadfile_thumb = $uploaddir . "thumb_" . $id . ".jpg";
@unlink($uploadfile);
@unlink($uploadfile_thumb);
response(0, "success");

function response($code, $msg) {
    $resp["code"] = $code;
    $resp["msg"] = $msg;
    echo json_encode($resp);
}
?>

