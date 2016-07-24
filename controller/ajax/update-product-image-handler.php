<?php

auth();
header('Content-type: application/json');
$file = $_FILES['image'];
$id = $_REQUEST["id"];
$uploaddir = $APPLICATION_PATH . "/static/image/product/";
$uploadfile = $uploaddir . $id . ".jpg";
$bk_uploadfile = $uploaddir . "bk-" . date('Y-m-d-H-i-s') . "-" . $id . ".jpg";
$uploadfile_thumb = $uploaddir . "thumb_" . $id . ".jpg";
$bk_uploadfile_thumb = $uploaddir . "bk-" . date('Y-m-d-H-i-s') . "-thumb_" . $id . ".jpg";
if (file_exists($uploadfile)) {
    rename($uploadfile, $bk_uploadfile);
    if (file_exists($uploadfile_thumb)) {
        rename($uploadfile_thumb, $bk_uploadfile_thumb);
    }
}
if (!move_uploaded_file($file['tmp_name'], $uploadfile)) {
    if (file_exists($bk_uploadfile)) {
        @rename($bk_uploadfile, $uploadfile);
        if (file_exists($bk_uploadfile_thumb)) {
            @rename($bk_uploadfile_thumb, $uploadfile_thumb);
        }
    }
    exit;
}
$image["name"] = $file['name'];
$image["size"] = $file['size'];
$image["url"] = "/static/image/product/{$id}.jpg";
$image["thumbnailUrl"] = "/static/image/product/thumb_{$id}.jpg";
$image["deleteUrl"] = "";
$image["deleteType"] = "";
$image["success"] = "0";
$images[] = $image;
$resps["files"] = $images;

$size = GetimageSize($uploadfile);
switch ($size['mime']) {
    case "image/jpeg":
        $images_orig = ImageCreateFromJPEG($uploadfile);
        break;
    case "image/png":
        $images_orig = imagecreatefrompng($uploadfile);
}
$width = 700;
$width_thumb = 200;
if ($images_orig && $size) {
    if ($size[0] > $width) {
        scaleimage($images_orig, $size, $width, $uploadfile);
    }
    scaleimage($images_orig, $size, $width_thumb, $uploadfile_thumb);
    ImageDestroy($images_orig);
}
@unlink($bk_uploadfile);
@unlink($bk_uploadfile_thumb);
$image["success"] = "1";
echo json_encode($resps);

function scaleimage($images_orig, $size, $width, $output) {
    $height = round($size[1] * ($width / $size[0]));
    $photoX = ImagesX($images_orig);
    $photoY = ImagesY($images_orig);
    $images_fin = ImageCreateTrueColor($width, $height);
    ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

    ImageJPEG($images_fin, $output);
    ImageDestroy($images_fin);
}
