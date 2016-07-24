<?php

auth();
header('Content-type: application/json');
$width = 700;
$width_thumb = 200;
$file = $_FILES['image'];
$id =(int) $_REQUEST["id"];
$uploaddir = $APPLICATION_PATH . "/static/image/product/";
$uploadfile = $uploaddir . $id . ".jpg";
$uploadfile_thumb = $uploaddir . "thumb_" . $id . ".jpg";
$image = array();
$image["name"] = $file['name'];
$image["size"] = $file['size'];
$image["url"] = "/static/image/product/{$id}.jpg";
$image["success"] = "0";
$image["msg"] = "not process yet";
$images[] = $image;
$resps["files"] = $images;
if (file_exists($uploadfile)) {
    unlink($uploadfile);
}
if (file_exists($uploadfile_thumb)) {
    unlink($uploadfile_thumb);
}

if (!move_uploaded_file($file['tmp_name'], $uploadfile)) {
    $image["msg"] = "Không thể upload ảnh lên server";
    response($image);
    return;
}


$size = GetimageSize($uploadfile);
if ($size[0] < $width_thumb) {
    $image["msg"] = "Chiều ôộng phải lớn hơn 200px 200px";
    response($image);
    return;
}
switch ($size['mime']) {
    case "image/jpeg":
        $images_orig = ImageCreateFromJPEG($uploadfile);
        break;
    case "image/png":
        $images_orig = imagecreatefrompng($uploadfile);
    default :
        $image["msg"] = "Chỉ hỗ trợ ảnh jpg/png";
        response($image);
        return;
}

if ($images_orig && $size) {
    if ($size[0] > $width) {
        scaleimage($images_orig, $size, $width, $uploadfile);
    }
    scaleimage($images_orig, $size, $width_thumb, $uploadfile_thumb);
    ImageDestroy($images_orig);
} else {
    $image["msg"] = "Hình ảnh không hợp lệ";
    response($image);
    return;
}
$image["success"] = "1";

response($image);
function response($image) {
    $images[] = $image;
    $resps["files"] = $images;
    echo json_encode($resps);
}
function scaleimage($images_orig, $size, $width, $output) {
    $height = round($size[1] * ($width / $size[0]));
    $photoX = ImagesX($images_orig);
    $photoY = ImagesY($images_orig);
    $images_fin = ImageCreateTrueColor($width, $height);
    ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

    ImageJPEG($images_fin, $output);
    ImageDestroy($images_fin);
}
