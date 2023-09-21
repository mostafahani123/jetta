<?php


include_once("includes/navbar.php")?>







<section>
<div class="container" style="margin-top:400px;">
  <h1 class="text-center mb-3 text-warning">welcome to our create product </h1>
</div>
</section>




<form class="container" action="handlers/handlecrearteprodect.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">type :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description :</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantity"></textarea>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">desc..! </label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product_image :</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
  </div>

  
  <button type="submit"  class="btn btn-primary" name="btn-y">Submit</button>
</form>

<?php include_once("includes/footer.php")?>
