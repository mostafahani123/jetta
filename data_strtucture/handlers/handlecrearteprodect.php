<?php


require_once("../includes/connection.php");
if(isset($_POST['btn-y'])){
$product_name = $_POST['name'];
$product_price= $_POST['price'];
$product_quantity= $_POST['quantity'];
$product_description= $_POST['description'];
//handle image
$image=$_FILES['image'];
$image_name = $image['name'];
$image_name = uniqid() . $image_name ;
$image_location = $image['tmp_name'];
move_uploaded_file($image_location , "../uploads/$image_name");
//end handle image

$insert_product = "insert into products_je(name, price ,quantity , description,image)values(?,?,?,?,?)";
$test=$connection->prepare($insert_product);
$test->execute([
  $product_name ,
  $product_price , 
  $product_quantity , 
  $product_description,
  $image_name
]);
header("location:../create.php");
}else{
 header("location:../create.php");
}






?>