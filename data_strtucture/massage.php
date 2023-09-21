








<?php  include("includes/navbar.php") ?>







<?php

require_once("includes/connection.php");

$product_q= "SELECT * FROM contact_user order by id ";
$stmt=$connection->prepare($product_q);

$stmt->execute([]);

$products = $stmt->fetchAll();

?>



                         
<section>
<div class="container" style="margin-top:40px;">
  <h1 class="text-center mb-3 text-warning">this massage user ! </h1>
  
<div class="row" style="margin-top:100px;">
  <?php  foreach($products as $product){?>
    <div class="col-md-4">
    <div class="card">
  <div class="card-body">
    <h5 class="card-title"><?= $product['name']; ?>
    <span class="bg-danger badge"><?= $product['email']; ?></span>
  </h5>
    <p class="card-text desc"><?= $product['subject']; ?></p>
    <p class="card-text desc"><?= $product['message']; ?></p>

    
    <a href="delete.php?pro_id=<?= $product['id']; ?>" class="btn btn-danger">Delete</a>

 
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
<br>
<br>
<br>


<?php include("includes/footer.php")  ?>