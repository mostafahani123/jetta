<?php
require_once("../includes/connection.php");
if(isset($_POST['btn-login'])){
      
    $email= $_POST['email'];
    $password= $_POST['password'];
    
    $check_q = "SELECT * FROM users where email = ?";
    $stmt =$connection->prepare($check_q);
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    $password_hashd = $user['password'];

 

    if($user){
           if(password_verify($password , $password_hashd)){
               session_start();
               $_SESSION['username'] = "{$user['firstname']}  {$user['lastname']}";
               $_SESSION['useremail'] = "{$user['email']}";
               $_SESSION['rolee_user'] = "{$user['role']}";
               $_SESSION['userid'] = "{$user['id']}";
               

            header("location:../handle_massage_products.php");  
 }


    }else{
        header("location:../register.php");
    }



}else{
    header("location:../login.php");
}

















?>