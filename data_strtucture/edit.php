<?php include_once("includes/navbar.php")?>

<?php
require_once("includes/connection.php");

$edit_pro = $_GET['edit_id'];

$edit_product = "SELECT * from products_je where id=?";
$stmt = $connection->prepare($edit_product);
$stmt->execute([$edit_pro]);
$pro_edit = $stmt->fetch();


?>

<section>
<div class="container">
  <h1 class="text-center mb-3 text-warning">welcome to our Edit product </h1>
</div>
</section>




<form class="container" action="handlers/edit.php" method="POST">
    <input type="hidden" value="<?= $pro_edit['id'] ?>" name="id">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product_name :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?= $pro_edit['name'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product_price :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="<?= $pro_edit['price'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product_quantity :</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantity" value="<?= $pro_edit['quantity'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product_description : </label>
    <textarea type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description" ><?= $pro_edit['description'] ?></textarea>
  </div>

  
  <button type="submit"  class="btn btn-primary" name="btn-edit">update product</button>
</form>
<?php include_once("includes/footer.php")?>
