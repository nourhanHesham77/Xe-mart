<?php
session_start();
require "../admin/functions/connect.php";


if(!isset($_POST['submit'])){
    header("location:../08-login.php");
    exit();
}

$email=$_POST['email'];
$password=$_POST['pass'];

$select_customer =$connect -> query("SELECT * FROM customers WHERE email = '$email'");
$row_customer=$select_customer-> fetch_assoc();
$pass_hash =$row_customer['password'];
$id =$row_customer['id'];
$count = mysqli_num_rows($select_customer);

    
    if($count>0){

        if(password_verify($password,$pass_hash)){

         $_SESSION['login']=$id;
        header("location:../index.php");
    }
    else{
        header("location:../08-login.php?error= password is not correct");
    }
}else{
    header("location:../08-login.php?error=email is not correct");
}
