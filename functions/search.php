<?php

require "../admin/functions/connect.php";

$value=$_POST['val'];

$search=mysqli_real_escape_string($connect,$value);
$result=$connect->query("SELECT * FROM products WHERE name LIKE '%$search%' OR seller LIKE '%$search%'");
foreach($result as $row){
echo "<div style='display:block;background:bluviolet;color:greenyellow;z-index:1000;'>
<a href='05-single-product.php?id=".$row['id']."'>".$row['name']."</a></div>";

}