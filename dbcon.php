<?php
$sname ="localhost";
$usern = "root";
$pass = "";
$dbname ="pro_chat";

$conn = mysqli_connect($sname, $usern, $pass, $dbname);
if (!$conn) {
	die("connection failed" .mysqli_connect_error());
	# code...
}
//echo "Connected successfully";





?>