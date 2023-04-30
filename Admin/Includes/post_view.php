
<a href="?do=add" class="m-3 btn btn-primary">Add post</a>
<!-- <a href="?do=add_cat" class="m-3 btn btn-info">Add category</a>
<a href="?do=cat_view" class="m-3 btn btn-info">View category</a> -->
<br>
<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
    <thead class="thead-dark">
        <tr>
                <th>id</th>
                <th>user</th>
                <th>headline</th>
                <th>img</th>
                <th>post</th>
                <th>note</th>
                <th>keywords</th>
                <th>date</th>
                
</tr>
</thead>
<tbody>
    <?php
    $select_post= $connect->query("SELECT * FROM post");
    $counter=0;
    foreach($select_post as $row_post){

      $keyword=$row_post['keywords'];
    
    ?>

    <tr>
        <td><?php echo++$counter;?></td>
        <td><?php echo$row_post['name']?></td>
        <td><?php echo$row_post['headline']?></td>
        <td><img src="imges/<?php echo$row_post['img']; ?>" style="width:90px;height:120px;"></td>
        <td>
        <button type="button" class="btn btn-primary msg-view" id="view" data-toggle="modal" data-target="#exampleModalx<?php echo$row_post['id'] ?>" msg-data="<?php echo$row_post['id'] ?>">
  View post
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModalx<?php echo$row_post['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">post about<span style="color:blue;font-weight:bold;"><?php echo$row_post['headline'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p style="color:blue;font-weight:bold;"><?php echo$row_post['post'] ?></p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
  
</div>
    
        </td>
        <td>
        <button type="button" class="btn btn-primary msg-view" id="view" data-toggle="modal" data-target="#exampleModaly<?php echo$row_post['id'] ?>" msg-data="<?php echo$row_post['id'] ?>">
  View note
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModaly<?php echo$row_post['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">note about<span style="color:blue;font-weight:bold;"><?php echo$row_post['headline'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p style="color:blue;font-weight:bold;"><?php echo$row_post['note'] ?></p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
  
</div>
    
        </td>
        <td><?php echo$keyword?></td>
        <td><?php echo$row_post['date']?></td> 
        
     
     
    </tr>

    <?php } ?>
</tbody>
</table>