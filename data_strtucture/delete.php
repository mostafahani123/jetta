<?php 
require_once("includes/connection.php");
$del_id = $_GET['pro_id'];


$del_prod_q = "DELETE  FROM products_je where id = ?";
$stmt = $connection->prepare($del_prod_q);
$delete_pro = $stmt->execute([

    $del_id
]);

header("location:products.php");





?>