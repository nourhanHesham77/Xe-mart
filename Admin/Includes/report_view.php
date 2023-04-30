

<a href="?do=report" class="btn btn-primary m-3">Sales report</a>

<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
    <thead class="thead-dark">
        <tr>
                <th>id</th>
                <th>report</th>
                <th>date</th>
              
</tr>
</thead>
<tbody>
    <?php
    $select_report= $connect->query("SELECT * FROM reports WHERE priv=1");
    $counter=0;
    foreach($select_report as $row_report){
       
    
    ?>

    <tr>
        <td><?php echo++$counter;?></td>
        <td><?php echo$row_report['report']?></td>
        <td><?php echo$row_report['date']?></td>
    </tr>

    <?php } ?>