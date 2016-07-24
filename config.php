<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
   $mobile=1; 
}else{
    $mobile=0; 
}

//$mobile=1; 
//$path="./mobile";
//session_start();

$APPLICATION_PATH = realpath(dirname(__FILE__));
$fbappid="1601730360059672";
if ($_SERVER['HTTP_HOST'] == "www.cuakeodailoan.biz") {
    $live = 1;
} else {
    $live = 0;
}
if ($live) {
    $HOME = "http://www.cuakeodailoan.biz/";
    define('HOME', "http://cuakeodailoan.biz/");
    define('STATIC_SERVER', 'http://cuakeodailoan.biz/');
    define('DB_USER', 'cuacuonsg_16');
    define('DB_PASSWORD', '!@#$%^&*()');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cuacuonsg_16');
} else {
    $HOME = "http://www.cuacuon.com/";
    define('HOME', "http://cuacuon.com/");
    define('STATIC_SERVER', 'http://cuacuon.com/');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'hoaiphuong');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cuacuon.com');
}
$company="CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI XÂY DỰNG NỘI THẤT Á CHÂU";
$skype = "vohoangchieu";
$yahoo = "vohoangchieu";
$home_phone = "090.94.93.825";
$mobile_phone = "091.999.1660";
$user_name = "Mr. Bosch";
$facebook = "https://www.facebook.com/achau.biz";
$address = " 6/16 Đường Phạm Văn Hai, Phường 2, Quận Tân Bình, TpHCM";
$title = "CỬA KÉO ĐÀI LOAN - BẢNG GIÁ CỬA SẮT KÉO ĐÀI LOAN GIÁ RẺ TẠI TPHCM";
$meta_keywords = "cửa kéo,cua keo, cua keo dai loan, cửa kéo đài loan, cua xep dai loan, cua sat keo dai loan, cua keo sat, cua keo gia re, cửa kéo giá rẻ, cua keo co la, cửa kéo không lá";
$meta_description = "Cửa Kéo Đài Loan - Chuyên sản xuất và lắp ráp cửa kéo bằng sắt, tole công nghệ đài loan, cửa xếp tôn mạ màu đài loan: cửa kéo không lá, có lá, cửa kéo nhôm";
$ggmap_link = "ban-do-cua-cuon-a-chau";
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($db, 'utf8');

//var_dump($db);
function escape_data($data) {
    if ($data == "") {
        return $data;
    }
    global $db;
    if (get_magic_quotes_gpc()) {
        $data = stripslashes($data);
    }
//    var_dump($data);
    return mysqli_real_escape_string($db, trim($data));
}

function get_list_product_from_query_result($r) {
    global $mobile_phone;
    $products = array();
    while ($row = mysqli_fetch_array($r)) {
        $product = $row;
//        $product["name"] = $product["name"];
        $product["product_url"] = /* "/p/" . $product["category"] . "/" . */ $product['alilas'];
        $product["product_thumb"] = "/static/image/product/thumb_" . $product['id'] . ".jpg";
        $product["product_image"] = "/static/image/product/" . $product["id"] . ".jpg";
        if($product["meta_description"]==""){
            $product["short_desc"] = getplaintextintrofromhtml($product["description"]);
        }else{
            $product["short_desc"] = $product["meta_description"];
        }
        if ($product["price"] > 0) {

            $product['price'] = number_format($product['price']) . " VNĐ";
        } else {
            $product['price'] = "LH $mobile_phone";
        }
        $products[] = $product;
    }
    return $products;
}

function getShortDesc($input) {
    $line = $input;
    if (preg_match('/^.{1,260}\b/s', $input, $match)) {
        $line = $match[0];
    }
    return $line;
}

function go_to_not_found_page() {
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    header("Location: /");
    exit;
}

$query_category = "select *from category where active=1";
$query_result_category = mysqli_query($db, $query_category);
while ($row = mysqli_fetch_array($query_result_category)) {
    $category = $row;
    $category['url'] = "/" . $category['alilas']; //"/c/" . $category['id'];
    $category['name'] =    ucwords(strtolower($category['name']));
    $list_category[] = $category;
}

function getplaintextintrofromhtml($html) {
    $numchars = 75;
    // Remove the HTML tags
    $html = strip_tags($html);
    // Convert HTML entities to single characters
    $html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');
    // Make the string the desired number of characters
    // Note that substr is not good as it counts by bytes and not characters
    $html = mb_substr($html, 0, $numchars, 'UTF-8');
    // Add an elipsis
    $html .= "…";
    return $html;
}

function current_millis() {
    list($usec, $sec) = explode(" ", microtime());
    return round(((float) $usec + (float) $sec) * 1000);
}

function auth() {
    return;
    $valid_passwords = array(date("dmY") => "!@#$%^&*()");
    $valid_users = array_keys($valid_passwords);
    if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die("Not authorized");
        exit;
    }
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];

    $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

    if (!$validated) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die("Not authorized");
        exit;
    }
}

