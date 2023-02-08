<?php
$current="post";
include "design/header.php";
include "design/sidebar.php";
?>

<div id="content-wrapper">

      <div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">posts</li>
        </ol>


</div>
<?php
if(!isset($_GET['do'])){
    include "includes/post_view.php";
}
elseif($_GET['do']=="add"){
    include "includes/post_add.php";
}
?>
</div>




<?php
include "design/footer.php";
?>