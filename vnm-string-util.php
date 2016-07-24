<?php

function filter_vnm($str) {
    if($str==""){
        return "";
    }
    $u = array(
        'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'U',
        'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự', 'Ư',
        'ú', 'ù', 'ủ', 'ũ', 'ụ',
        'ứ', 'ừ', 'ử', 'ữ', 'ự', 'ư');
    $a = array(
        'Á', 'À', 'Ả', 'Ã', 'Ạ', 'A',
        'Ắ', 'Ằ', 'Ẩ', 'Ẵ', 'Ặ', 'Ă',
        'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ', 'Â',
        'á', 'à', 'ả', 'ã', 'ạ',
        'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'ă',
        'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'â');
    $e = array(
        'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'E',
        'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ', 'Ê',
        'é', 'è', 'ẻ', 'ẽ', 'ẹ',
        'ế', 'ề', 'ể', 'ễ', 'ệ', 'ê'
    );
    $o = array(
        'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'O',
        'Ố', 'Ồ', 'Ỗ', 'Ỗ', 'Ộ', 'Ô',
        'Ớ', 'Ờ', 'Ỡ', 'Ỡ', 'Ợ', 'Ơ',
        'ó', 'ò', 'ỏ', 'õ', 'ọ',
        'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ô',
        'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ơ'
    );
    $i = array(
        'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị', 'I',
        'í', 'ì', 'ỉ', 'ĩ', 'ị',
    );
    $y = array(
        'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ', 'Y',
        'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ',
    );
    $d = array('Đ', 'đ');

    $str = str_replace($a, 'a', $str);
    $str = str_replace($e, 'e', $str);
    $str = str_replace($d, 'd', $str);
    $str = str_replace($o, 'o', $str);
    $str = str_replace($u, 'u', $str);
    $str = str_replace($d, 'd', $str);
    $str = str_replace($i, 'i', $str);
    $str = str_replace($y, 'y', $str);
    $str = str_replace($d, 'd', $str);

    return $str;
}

function tolower_vnm($str) {
    if($str==""){
        return "";
    }
    $u = array(
        'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'U',
        'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự', 'Ư',
    );
    $u1 = array(
        'ú', 'ù', 'ủ', 'ũ', 'ụ', 'u',
        'ứ', 'ừ', 'ử', 'ữ', 'ự', 'ư');
    $a = array(
        'Á', 'À', 'Ả', 'Ã', 'Ạ', 'A',
        'Ắ', 'Ằ', 'Ẩ', 'Ẵ', 'Ặ', 'Ă',
        'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ', 'Â',
    );
    $a1 = array(
        'á', 'à', 'ả', 'ã', 'ạ', 'a',
        'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'ă',
        'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'â');
    $e = array(
        'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'E',
        'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ', 'Ê',
    );
    $e1 = array(
        'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'e',
        'ế', 'ề', 'ể', 'ễ', 'ệ', 'ê'
    );
    $o = array(
        'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'O',
        'Ố', 'Ồ', 'Ỗ', 'Ỗ', 'Ộ', 'Ô',
        'Ớ', 'Ờ', 'Ỡ', 'Ỡ', 'Ợ', 'Ơ',
    );
    $o1 = array(
        'ó', 'ò', 'ỏ', 'õ', 'ọ', 'o',
        'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ô',
        'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ơ'
    );
    $ii = array(
        'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị', 'I',
    );
    $ii1 = array(
        'í', 'ì', 'ỉ', 'ĩ', 'ị', 'i',
    );
    $y = array(
        'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ', 'Y',
    );
    $y1 = array(
        'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ', 'y'
    );
    $d = array('Đ',
    );
    $d1 = array(
        'đ');

    $count = count($a);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($a[$i], $a1[$i], $str);
    }

//    $str = str_replace($a, 'a', $str);
    $count = count($e);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($e[$i], $e1[$i], $str);
    }
//    $str = str_replace($e, 'e', $str);
    $count = count($d);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($e[$i], $e1[$i], $str);
    }
//    $str = str_replace($d, 'd', $str);
     $count = count($o);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($o[$i], $o1[$i], $str);
    }
//    $str = str_replace($o, 'o', $str);
    $count = count($u);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($u[$i], $u1[$i], $str);
    }
//    $str = str_replace($u, 'u', $str);
    $count = count($d);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($d[$i], $d1[$i], $str);
    }
//    $str = str_replace($d, 'd', $str);
     $count = count($ii);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($ii[$i], $ii1[$i], $str);
    }
//    $str = str_replace($i, 'i', $str);
    $count = count($y);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($y[$i], $y1[$i], $str);
    }
    //$str = str_replace($y, 'y', $str);
    $count = count($d);
    for ($i = 0; $i < $count; $i++) {
        $str = str_replace($d[$i], $d1[$i], $str);
    }
    //$str = str_replace($d, 'd', $str);
    $str = strtolower($str);
    return $str;
}

function filter_lucene($input) {
    $specials = array('\\', '+', '-', '&', '|', '!', '(', ')', '{', '}', '[', ']', '^', '"', '~', '*', '?', ':');
    $output = $input;
    foreach ($specials as $c) {
        $output = str_replace($c, '\\' . $c, $output);
    }
    return $output;
}

function filter_letter($input) {
    if($input==""){
        return "";
    }
    return preg_replace("~[^A-Za-z0-9\s\-]~", "", $input);
}

function standard_string($input) {
    if($input==""){
        return "";
    }
    $input = trim($input);
    $input = preg_replace('/\s\s+/', ' ', $input);
    return $input;
}

function make_id_from_name($input) {
    if($input==""){
        return "";
    }
    $input = filter_vnm($input);
    $input = filter_letter($input);
    $input = standard_string($input);
    $input = str_replace(" ", "-", $input);
    $input = strtolower($input);
    return $input;
}




?>