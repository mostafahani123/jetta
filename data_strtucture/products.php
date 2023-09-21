<?php  session_start(); ?>

<?php include_once("includes/navbar.php")?>


<?php



require_once("includes/connection.php");

$product_q= "SELECT * FROM products_je order by id ";
$stmt=$connection->prepare($product_q);

$stmt->execute([]);

$products = $stmt->fetchAll();

?>
<section>
<div class="container">
  <h1 class="text-center mb-3 text-warning">welcome to our products page </h1>
  
<div class="row" style="margin-top:100px;">
  <?php  foreach($products as $product){?>
    <div class="col-md-4">
    <div class="card">
  <img src="uploads/<?= $product['image'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $product['name']; ?>
    <span class="bg-danger badge"><?= $product['price']; ?></span>
  </h5>
    <p class="card-text desc"><?= $product['description']; ?></p>
    

    <a href="details.php?product_id=<?= $product['id']; ?>" class="btn btn-primary">Details</a>
  
<?php if($_SESSION && $_SESSION['rolee_user'] == "admin"){ ?> 
    <a href="delete.php?pro_id=<?= $product['id']; ?>" class="btn btn-danger">Delete</a>
    <a href="edit.php?edit_id=<?= $product['id']; ?>" class="btn btn-dark">Edit</a>
    <?php } ?>
  </div>
</div>
    </div>
    <?php }?>
</div>
</div>
</section>
<br>
<br>
<br>
<br>
<br>

<?php include_once("includes/footer.php")?>
