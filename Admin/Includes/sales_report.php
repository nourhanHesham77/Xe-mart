


<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
    <thead class="thead-dark">
        <tr>
                <th>id</th>
                <th>product</th>
                <th>sales</th>
              
</tr>
</thead>
<tbody>
    <?php
    $select_product=$connect->query("SELECT * FROM products");

    foreach($select_product as $product){
   
    $product_id=$product['id'];
    
    $select_report= $connect->query("SELECT sum(count) FROM reports WHERE priv=1 AND product_id='$product_id' ");
    $counter=0;
    foreach($select_report as $row_report){
       
    
    ?>

    <tr>
        <td><?php echo++$counter;?></td>
        <td><?php echo$product['name']?></td>
        <td><?php echo$row_report['sum(count)']?></td>
    </tr>

    <?php } ?>
    <?php } ?>