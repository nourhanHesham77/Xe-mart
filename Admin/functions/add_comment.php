<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

require "../admin/functions/connect.php";



$name=$_POST['sname'];
$email=$_POST['semail'];
$subject=$_POST['ssubject'];
$message=$_POST['smessage'];

$insert_message=$connect->query("INSERT INTO comments (name,email,subject,message) VALUES ('$name','$email','$subject','$message')");

echo "<div class='alert alert-success' id='ssuccess'>success</div>";



}