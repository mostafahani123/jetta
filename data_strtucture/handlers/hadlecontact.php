<?php
require_once("../includes/connection.php");
if(isset($_POST['btn-contact'])){
$name = $_POST['name'];
$email= $_POST['email'];
$sub= $_POST['subject'];
$mass= $_POST['message'];


$inserrt_product = "insert into contact_user(name, email ,subject ,message)values(?,?,?,?)";
$tesst=$connection->prepare($inserrt_product);
$tesst->execute([
    $name ,
    $email, 
    $sub , 
    $mass

]);
header("location:../index.php");

}else{
 header("location:../contact.php");
}











?>