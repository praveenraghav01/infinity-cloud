<?php

session_start();
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
require 'app/start.php';

if(isset($_FILES['file']))
{
    $file = $_FILES['file'];
    //file details
    $name = $file['name'];
    $temp_name = $file['tmp_name'];

    $extension = explode('.', $name);
    $extension = strtolower(end($extension));

    // Temp details
    $key = md5(uniqid());
    $tmp_file_name = $key.'.'.$extension;
    $tmp_file_path = "images/{$tmp_file_name}";

    // Move the file
    move_uploaded_file($temp_name, $tmp_file_path);

    try {
        $s3->putObject([
            'Bucket' => $_SESSION['bucket'],
            'Key' => "uploads/{$tmp_file_name}",
            'Body' => fopen($tmp_file_path, 'rb'),
            'ACL' => 'public-read'
        ]);

        //Remove the  file
       // unlink($tmp_file_path);

    } catch(S3Exception $e)
    {
         echo $e->getMessage() . "\n";
    }
    
header("Location: profile.php?id=2");
}
else{
    header("Location: profile.php?id=1");
}
?>
