<?php

require "../admin/functions/connect.php";

$id=$_POST['sid'];

$get_count=$connect->query("SELECT * FROM cart WHERE id='$id'");
$get_raw=$get_count->fetch_assoc();
$count = $get_raw['count'];

if($count>1){
     $update_count=$connect->query("UPDATE cart SET count=count-1 WHERE id='$id'");
if($update_count){
     $get_count=$connect->query("SELECT * FROM cart WHERE id='$id'");
            $get_raw=$get_count->fetch_assoc();
                  echo$get_raw['count'];
                                          }
}else{
     $get_count=$connect->query("SELECT * FROM cart WHERE id='$id'");
     $get_raw=$get_count->fetch_assoc();
           echo$get_raw['count'];
}