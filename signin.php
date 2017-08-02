<?php

use Aws\Iam\IamClient;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

require 'app/start.php';

require "db.php";
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);

}
else
{

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $user=$_POST['user'];
    $mobile=$_POST['mobile'];

$sql="INSERT INTO user_id (email,name,pwd,mobile) VALUES('$email','$user','$pwd','$mobile') ";
$result = $conn->query($sql);
if($result)
{
    $key = md5(uniqid());
    $BUCKET_NAME=$key.'demo';
    try {
    $result = $s3->createBucket([
        'Bucket' => $BUCKET_NAME,
    ]);
    }catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
    }
    $sql="UPDATE user_id SET bucket='$BUCKET_NAME' WHERE email='$email' ";
    $result = $conn->query($sql);

header("Location: login.php");
}
else
{
      echo "<script>location.replace(\"index.php?id=3\")</script><br>";
 
}
    }
    else
{
      echo "<script>location.replace(\"index.php?id=4\")</script><br>";
 
}

}
?>