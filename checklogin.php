<?php
@session_start();
if (!isset($_SESSION['email'])) 
{
//$_SESSION['destination']=$_SERVER["REQUEST_URI"];
//header("Location: index.html");
//exit(0);
header("Location: index.php");
}

?>