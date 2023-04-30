<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
session_start();
    require "../admin/functions/connect.php";

    $id=$_POST['sid'];
    $rate=$_POST['srate'];
    $log=$_SESSION['login'];


    // $select_rate=$connect->query("SELECT * FROM rate WHERE user_id='$log' AND product_id='$id'");
    // $get_rate=$select_rate->fetch_assoc();
    // $ra=$get_rate['rate'];
    // if($ra != $rate){


        $insert_rate=$connect->query("INSERT INTO rate (user_id,product_id,rate) VALUES ('$log','$id','$rate')");
    



    //num_rows

    $select_all=$connect->query("SELECT * FROM rate WHERE product_id='$id'");
    $all_rows=$select_all->num_rows;

    $one_all=$connect->query("SELECT * FROM rate WHERE product_id='$id' AND rate=1");
    $one_rows=$one_all->num_rows;
    
    $two_all=$connect->query("SELECT * FROM rate WHERE product_id='$id' AND rate=2");
    $two_rows=$two_all->num_rows;
    
    $three_all=$connect->query("SELECT * FROM rate WHERE product_id='$id' AND rate=3");
    $three_rows=$three_all->num_rows;
    
    $four_all=$connect->query("SELECT * FROM rate WHERE product_id='$id' AND rate=4");
    $four_rows=$four_all->num_rows;
    
    $five_all=$connect->query("SELECT * FROM rate WHERE product_id='$id' AND rate=5");
    $five_rows=$five_all->num_rows;
    
    $total = ($five_rows*5) + ($four_rows*4) + ($three_rows*3) + ($two_rows*2) + ($one_rows*1);
    $last_rate=$total/$all_rows;

    $update_rate=$connect->query("UPDATE products SET rate='$last_rate' WHERE id='$id'");

}