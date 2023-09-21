<?php
require_once("../includes/connection.php");

if(isset($_POST['btn-edit'])){
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$pro_id = $_POST['id'];

$update_q = "UPDATE products_je set name=? ,price=?, quantity=?, description=? where id=?";
$stmt = $connection->prepare($update_q);

$stmt->execute([
    $name, 
    $price,
    $quantity,
    $description,
    $pro_id

]);
header("location:../details.php?product_id={$pro_id}");
}else{
    header("location:../index.php");
};
