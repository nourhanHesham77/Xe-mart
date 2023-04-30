<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    session_start();
    require "../admin/functions/connect.php";

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $company=$_POST['company'];
    $addressne=$_POST['addressne'];
    $addresswo=$_POST['addresswo'];
    $company=$_POST['company'];
$id=$_SESSION['login'];
    $insert_checkout=$connect->query("INSERT INTO checkout (fname,lnane,email,phone,company,addressOne,addressTwo,country_id,city,postal,pay)
     VALUES ('$fname','$lname','$email','$phone','$company','$addressne','$addresswo','','')")


}