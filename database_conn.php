<?php  

$sname = "localhost";
$uname = "root";
$pass = "";

$db_name = "ppl_project1";


$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}