<?php 

// connect to the database
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "ideap";

$conn = mysqli_connect($DB_host,$DB_user,$DB_pass,$DB_name);
mysqli_set_charset($conn,"utf8");

if($conn===false)
{
	die("error: could not connect".mysqli_connect_error());
}


?>
