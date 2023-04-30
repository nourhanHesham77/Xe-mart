<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // session_start();
        require "connect.php";

     
$name=$_POST['name'];
$headline=$_POST['headline'];
$posts=$_POST['post'];
$note=$_POST['note'];
$keyword=$_POST['keywords'];


        $img = $_FILES['img']['name'];


if($_FILES['img']['error'] == 0){

    $extentions = array("png","jpg","gif","jpeg","jfif");

    $ext = pathinfo($img,PATHINFO_EXTENSION);

    if(in_array($ext,$extentions)){

        if($_FILES['img']['size'] < 10000000){

            $new_name = md5(uniqid()).".".$ext;

            move_uploaded_file($_FILES['img']['tmp_name'],"../imges/".$new_name);

        }else{
            echo "file is too long";
        }

    }else{
        echo "this Extention not supported";
    }

}else{
    echo "bad format / file error";
}


$insert_post=$connect->query("INSERT INTO post (img,headline,name,post,note,keywords) VALUES ('$new_name','$headline','$name','$posts','$note','$keyword')");

header("location:../post.php");



}