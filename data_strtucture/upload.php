<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td>please select a file</td></tr>
<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE" value="16000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit" id="upload" value=" Upload "></td>
</tr>
</table>
</form>

<?php
if(isset($_POST['upload'])&&$_FILES['userfile']['size']>0)
{

    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if(!get_magic_quotes_gpc())
    {
        $fileName = addslashes($fileName); echo "<br>".$fileName."<br>";
    }
    if($db)
    { 
       $query = mysqli_query($connection,"INSERT INTO pro (name, size, type, content) VALUES ('$fileName', '$fileSize', '$fileType', '$content')") or die('Error, query failed');
      echo "<br>File $fileName uploaded<br>";
    }
    else 
    { 
      echo "file upload failed"; 
    }
} 




include 'connection.php';
$sql=mysqli_query($connection,"Select name,content from pdf where id = (select max(id) from pdf)"); 
$result=mysqli_fetch_assoc($sql);
$filename=$result['name'];//  echo $filename;
$filecontent=$result['content'];
header('Content-type: application/pdf');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
header('Content-Disposition: inline; filename="'.$filename.'"');
readfile($filecontent); 
mysqli_close($connection);





?>
