<?php
include 'dbcon.php';
?>
<?php

$sender=$_POST['email'];
$reciever=$_POST['name'];
$msg=$_POST['phone'];




$sql="INSERT INTO message (from_user,to_user,msg)
values ('$reciever','$sender','$msg')";
if (mysqli_query($conn, $sql)) 
{
echo json_encode(array("statusCode"=>200));

}
else
{
	echo json_encode(array("statusCode"=>201));
	echo "failed";
	
}
?>