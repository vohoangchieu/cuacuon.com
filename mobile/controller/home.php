<?php

$query_bosch = "select *from product order by show_in_home desc  limit 16";
$query_result_bosch = mysqli_query($db, $query_bosch);
$list_home_product_bosch = get_list_product_from_query_result($query_result_bosch);

//$query_skil = "select *from product where type=1 order by show_in_home desc limit 8";
//$query_result_skil = mysqli_query($db, $query_skil);
//$list_home_product_skil = get_list_product_from_query_result($query_result_skil);

//$query_home_slide = "select *from product order by show_in_slide desc limit 8";
//$query_result_home_slide = mysqli_query($db, $query_home_slide);
//$list_home_slide_product = get_list_product_from_query_result($query_result_home_slide);