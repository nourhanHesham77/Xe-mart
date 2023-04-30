<?php
session_start();
if(!isset($_SESSION['login'])){
  header("location:../08-login.php");
  exit();
}
require "../admin/functions/connect.php";

$id=$_POST['xid'];
$log=$_SESSION['login'];

$select_product=$connect->query("SELECT * FROM cart WHERE id='$id'");
$product=$select_product->fetch_assoc();
$product_id=$product['product_id'];

$delete_cart=$connect->query("DELETE FROM cart WHERE id='$id'");
$delete_report=$connect->query("DELETE FROM report WHERE product_id='$product_id' AND session_log='$log' AND priv=0");

if($delete_cart){
$select_cart=$connect->query("SELECT * FROM cart WHERE session_login = '$log'");
$count =$select_cart-> num_rows;
echo$count;


}

