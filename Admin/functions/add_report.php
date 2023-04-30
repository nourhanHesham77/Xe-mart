<?php

session_start();
// if(!isset($_SESSION['login'])){
//   header("location:../08-login.php");
//   exit();
// }
require "../admin/functions/connect.php";

$id= $_SESSION['login'];

$update=$connect->query("UPDATE reports SET priv=1 WHERE session_log='$id'");

if($update){
    header("location:../07-checkout.php");
}