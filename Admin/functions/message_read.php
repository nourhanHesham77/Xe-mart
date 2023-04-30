<?php
require "connect.php";

$id =$_POST['xid'];

$update_state=$connect->query("UPDATE comments SET statues=1 WHERE id = '$id'");
// header("location:../messages.php");

if($update_state){
    $row_count=$connect->query("SELECT * FROM comments WHERE statues = 0");
    echo $row_count -> num_rows;
}