<?php
include 'dbcon.php';
if (isset($_POST['email']) and isset($_POST['pass'])){
$email =$_POST['email'];
$pass = $_POST['pass'];

$query = "select * from all_user where username='$email' and pass ='$pass'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
 $row = mysqli_fetch_assoc($result);

if ($count == 1) {
	session_start();
	$_SESSION['log_user'] = $row['id'];
     //echo "welcome ".$_SESSION['log_user'];
$query = "UPDATE all_user set active_st=1";
$result = mysqli_query($conn, $query) ;
	header("location: chat.php");
	exit();
}
else
{
	echo "invalid username or pass";
}
}

?>