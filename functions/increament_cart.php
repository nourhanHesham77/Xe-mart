<?php

require "../admin/functions/connect.php";

$id=$_POST['lid'];
$count=$_POST['scoun'];

$update_count=$connect->query("UPDATE cart SET count=count+1 WHERE id='$id'");

if($update_count){
$get_count=$connect->query("SELECT * FROM cart WHERE id='$id'");
$get_raw=$get_count->fetch_assoc();
echo$get_raw['count'];

 //report
 $select=$connect->query("SELECT * FROM cart WHERE session_login='$id' and product_id = '$product'");
 $get_product=$select->fetch_assoc();
 $num_count=$get_product['count'];
 $name_product=$connect->query("SELECT * FROM products WHERE id='$product'");
 $get_name=$name_product->fetch_assoc();
 $name=$get_name['name'];
 $select_client=$connect->query("SELECT * FROM customers WHERE id='$id'");
 $get_client=$select_client->fetch_assoc();
 $client=$get_client['fname'];
$report="client ".$client." bought ".$num_count." from this product ".$name;
$update_report=$connect->query("UPDATE reports SET report='$report',count='$num_count' WHERE product_id = '$product' and  session_log='$id'");
}