<?php
session_start();
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

    $sql="SELECT * FROM user_id WHERE email='$email' AND pwd='$pwd' ";
    $result = $conn->query($sql);
if($result)
{
    while($row1= mysqli_fetch_array($result))
    {
        $_SESSION['email']=$row1['email'];
        $_SESSION['bucket']=$row1['bucket'];
        $_SESSION['user']=$row1['name'];
    }
        header("Location: profile.php");
}
else
    {
         echo "<script>location.replace(\"index.php?id=1\")</script><br>";
    }

}
else
    {
        echo "<script>location.replace(\"index.php?id=2\")</script><br>";
    }
}
?>