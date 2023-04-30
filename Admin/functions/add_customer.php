<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require "../admin/functions/connect.php";

    $fname=$_POST['sfname'];
    $lname=$_POST['slname'];
    $email=$_POST['smail'];
    $phone=$_POST['sphone'];
    $password=$_POST['spass'];

    $pass=password_hash($password,PASSWORD_DEFAULT);

   
   
$insert_customer=$connect->query("INSERT INTO customers (fname,lname,email,phone,password) VALUES ('$fname','$lname','$email','$phone','$pass')");

     echo "<div class='alert alert-success' id='ssigned'>success</div>";
}