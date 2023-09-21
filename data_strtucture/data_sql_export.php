

<?php include_once("includes/navbar.php")?>


<?php 
    include "config.php";
?>
<div class="container">
    <form method='post' action='download_csv.php'>
        <input type='submit' value='Download' name='export' style="background-color:red; width:200px; margin-left:100px; color:white;">
 
        <table border='1' style='border-collapse:collapse; width:100%;'>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>type</th>                
                <th>description</th>
            </tr>
            
            

            <?php 
                $query = "SELECT * FROM products_je ORDER BY id ='?' ";
                $result = mysqli_query($con,$query);
                $user_arr = array();
                
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $user_name = $row['name'];
                    $name = $row['price'];                    
                    $email = $row['description'];
                    $user_arr[] = array($id, $user_name, $name, $email);
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $name; ?></td>                    
                    <td><?php echo $email; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
        <?php 
            $serialize_user_arr = serialize($user_arr);
        ?>
        <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
    </form>
</div>
<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<?php include_once("includes/footer.php")?>
