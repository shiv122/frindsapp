<?php
include 'dbcon.php';

?>
<?php
session_start();

switch ($_GET['name']) {
	case 'msg_rep':
		$sql="UPDATE all_user set send_to='".$_GET['id']."' where id='".$_SESSION['log_user']."' ";
		mysqli_query($conn, $sql);
		header("Location: chat.php");
		break;
	
	default:
		# code...
		break;
}

?>