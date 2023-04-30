<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    require "connect.php";

    $id=$_POST['msg-del'];
    $extract_id=implode(',',$id);
    

    $delete_msg=$connect->query("DELETE FROM comments WHERE id IN($extract_id)");
    header("location:../messages.php");
}