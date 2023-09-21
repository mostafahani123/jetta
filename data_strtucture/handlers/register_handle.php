
<?php
require_once("../includes/connection.php");
if(isset($_POST['btn-register'])){
    
     $frist_n = $_POST['frist_n'];
     $Last_L = $_POST['Last_L'];
     $Email = $_POST['Email'];
     $pass = $_POST['password'];
    $password = password_hash($pass , PASSWORD_DEFAULT);

     $insert_data = "INSERT INTO users(firstname, lastname ,email , password)values(?,?,?,?)";
     $test=$connection->prepare($insert_data);
     $test->execute([
        $frist_n ,
        $Last_L  , 
        $Email , 
        $password
       
     ]);
   
    
     header("location:../login.php");

}else{
    header("location:../login.php");
}



?>