<?php
$current="reports";
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
          <li class="breadcrumb-item active">report</li>
        </ol>


</div>
<?php
if(!isset($_GET['do'])){
    include "includes/report_view.php";
}elseif($_GET['do']=="report"){
  include "includes/sales_report.php";
}

?>
</div>




<?php
include "design/footer.php";
?>