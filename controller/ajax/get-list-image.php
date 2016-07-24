<?php

// You can't simply echo everything right away because we need to set some headers first!
$output = ''; // Here we buffer the JavaScript code we want to send to the browser.
$delimiter = "\n"; // for eye candy... code gets new lines
$output .= 'var tinyMCEImageList = new Array(';

$directory = $APPLICATION_PATH . "/static/image/product"; // Use your correct (relative!) path here

function dirToArray($dir) {

    $result = array();

    $cdir = scandir($dir);
    foreach ($cdir as $key => $value) {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
            } else {
                $result[] = $value;
            }
        }
    }

    return $result;
}

$list_image = (dirToArray($directory));
//foreach ($list_image as $image) {
////    echo $image."<br/>";
//    $output .= $delimiter
//            . '["'
//            . $image
//            . '", "'
//            . '\static\image\product\\thumb' . $image
//            . '"],';
//}
$total = count($list_image);
for ($i = 0; $i < $total - 1; $i++) {
    $output .= $delimiter
            . '["'
            . '/static/image/product/'. $list_image[$i]
            . '", "'
            . '/static/image/product/'. $list_image[$i]
            . '"],';
}
$output .= $delimiter
        . '["'
        . $list_image[$total - 1]
        . '", "'
        . '/static/image/product/thumb/' . $list_image[$total - 1]
        . '"]';
// Finish code: end of array definition. Now we have the JavaScript code ready!
$output .= ');';

// Make output a real JavaScript file!
header('Content-type: text/javascript'); // browser will now recognize the file as a valid JS file
// prevent browser from caching
header('pragma: no-cache');
header('expires: 0'); // i.e. contents have already expired
// Now we can send data to the browser because all headers have been set!
echo $output;


