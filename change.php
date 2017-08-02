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
        $current=$_POST['current'];
        $new=$_POST['new'];
        $email=$_SESSION['email'];
        $sql="SELECT * FROM user_id WHERE email='$email' AND pwd='$current' ";
        $result = $conn->query($sql);
            if($result)
            {
                $sql1="UPDATE user_id SET pwd='$new' WHERE email='$email' ";
                $result = $conn->query($sql1);
                if($result)
                {
                    header("Location: profile.php?id=3");
                }
                else
                {
                    header("Location: profile.php?id=4");
                }
            }
            else
            {
                 header("Location: profile.php?id=5");
            }
    }
    else
    {
        echo "error";
    }
}