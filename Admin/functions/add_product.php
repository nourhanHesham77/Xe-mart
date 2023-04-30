<?php
require "connect.php";

if(!isset($_POST['submit'])){
    header("location:../products.php");
    exit();
}


$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$seller=$_POST['seller'];
$quantity=$_POST['quantity'];
$descript=$_POST['descript'];
$cat=$_POST['categories'];

$array=array();
$counter=count($_FILES['img']);
for($x=0;$x<$counter;$x++){
    $img=$_FILES['img']['name'][$x];
    if($_FILES['img']['error'][$x]==0){

        $extentions=array("jpg","png","jfif","jpeg");
        $im_ex=pathinfo($img,PATHINFO_EXTENSION);

        if(in_array($im_ex,$extentions)){

            if($_FILES['img']['size'][$x]<=1000000){
                $new_img=md5(uniqid()).".".$im_ex;
                move_uploaded_file($_FILES['img']['tmp_name'][$x],"../imges/". $new_img);

                $array[] = $new_img;
                $images_end = implode(",",$array);


            }else{
                echo "file is too loong";
            }
        }else{
            echo "bad format";
        }

    }else{
        echo "file error";
    }

}


$insert_product=$connect-> query("INSERT INTO products (name,price,sale,seller,img,quantity,descript,cat_id) 
VALUES
('$name','$price','$sale','$seller','$images_end','$quantity','$descript','$cat')
");

header("location:../products.php");
