<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "cca_2022";

$conn = mysqli_connect($sname, $uname, $password, $db_name);	

if (!$conn) {
	echo "Connection Failed!";
	exit();
}