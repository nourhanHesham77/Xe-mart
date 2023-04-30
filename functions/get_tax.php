<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){

require "../admin/functions/connect.php";

$id=$_POST['tid'];
$sid= $_SESSION['login'];

$insert_tax=$connect->query("UPDATE cart SET tax_id='$id' WHERE session_login = '$sid'");
$select_country=$connect->query("SELECT * FROM tax WHERE id='$id'");

$row_country=$select_country->fetch_assoc();

echo$row_country['tax'];

}