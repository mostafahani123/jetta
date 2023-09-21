<?php  include("includes/navbar.php") ?>



<?php

require_once("includes/connection.php");

$pro_id = $_GET['product_id'];
$product_check_q = "SELECT * FROM products_je where id=?";
$stmt =$connection->prepare($product_check_q);
$stmt->execute([
    $pro_id
]);
$product = $stmt->fetch();

?>
<section class="container my-5">
<div class="row" style="margin-top:100px;">

<div class="col-md-6">
<img src="uploads/<?= $product['image'];?>"  style="width:200px;">
</div>
<div class="col-md-6" style="margin-left:10px; margin-top:10px;">


<h2>
    <?= $product['name'];?>
    <span class="badge bg-danger text-light"> <?= $product['price'] ?></span>
</h2>

<p class="card-text desc"><?= $product['description']; ?></p>
<p> avaiable quantity !!:<span class="badge bg-danger"> <?=  $product['quantity']; ?></span></p>

<a href="data_sql_export.php" class="btn btn-danger" >Details</a>
</div>


</div>
</section>
<?php  include("includes/footer.php") ?>