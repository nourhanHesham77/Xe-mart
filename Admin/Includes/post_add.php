

<form method="post" action="functions/add_post.php" style="width:90%;margin:auto;" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail">name</label>
    <input class="form-control" type="text" name="name" id="exampleInputEmail"  placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">Headline</label>
    <input class="form-control" type="text" name="headline" id="exampleInputEmail"  placeholder="headline">
</div>

<div class="form-group">
    <label for="exampleInputEmail">img</label>
    <input class="form-control" type="file" name="img" id="exampleInputEmail" >
</div>


<div class="form-group">
    <label for="exampleInputEmail1">post</label>
    <input type="text" name="post"  class="form-control" id="exampleInputEmail1" placeholder="post">
  </div>

<div class="form-group">
    <label for="exampleInputEmail">note</label>
    <input class="form-control" type="text" name="note" id="exampleInputEmail"  placeholder="note">
</div>



<div class="form-group">
    <label for="exampleInputEmail">keywords</label>
    <p style="color:red;font-size:15px;">please part keywords with space</p>
    <input class="form-control" type="text" name="keywords" id="exampleInputEmail"  placeholder="keywords">
</div>


 
   
  <input type="submit" name="submit" class="btn btn-primary" value="Add">


</form>