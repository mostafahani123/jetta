<?php

$filename = ' gf.pdf';
$export_data = unserialize($_POST['export_data']);

// Create File
$file = fopen($filename,"w");

foreach ($export_data as $line){
    fputcsv($file,$line);
}

fclose($file);

// Download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Type: application/pdf; "); 

readfile($filename);

// Deleting File
unlink($filename);

exit();