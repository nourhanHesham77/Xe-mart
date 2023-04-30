<?php
session_start();

require "../admin/functions/connect.php";

if(!isset($_SESSION['login'])){
  header("location:../08-login.php");
}

$id= $_SESSION['login'];
$product=$_POST['productid'];

$select_cart=$connect->query("SELECT * FROM cart WHERE product_id = '$product' and session_login = '$id'");

$count =$select_cart-> num_rows;

if($count>0){
    $update_cart=$connect->query("UPDATE cart SET count=count+1 WHERE product_id = '$product' and session_login = '$id' ");

//count
    $select_count=$connect->query("SELECT * FROM cart WHERE session_login = '$id'");
    $count_cart=$select_count-> num_rows;
    echo$count_cart;


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
   


    
}else{
    $add_cart=$connect->query("INSERT INTO cart (product_id,session_login,count) VALUES ('$product','$id',1)");
 
    //count
    $select_count=$connect->query("SELECT * FROM cart WHERE session_login = '$id'");
    $count_cart=$select_count-> num_rows;
    echo$count_cart;


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
      $insert_report=$connect->query("INSERT INTO reports (report,product_id,session_log,count) VALUES ('$report','$product','$id','$num_count')");
 
    
}

// if($add_cart || $update_cart){
//   $select_count=$connect->query("SELECT * FROM cart WHERE session_login = '$id'");
// $count_cart=$select_count-> num_rows;
// echo$count_cart;
// }




