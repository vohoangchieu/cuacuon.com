<?php
$title=$title. " - " . $address;

$query_left_slide = "select *from product order by show_in_slide desc limit 8";
$query_result_left_slide = mysqli_query($db, $query_left_slide);
$list_left_slide_product = get_list_product_from_query_result($query_result_left_slide);

