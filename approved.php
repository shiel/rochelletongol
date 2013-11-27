<?php 

mysql_connect('localhost','root') && mysql_select_db('message_db');
$id = $_GET['id'];
$query = mysql_query("select * from message where id = '{$id}'");
$row = mysql_fetch_assoc($query);


if($_POST['approved']){
$app='Y';
	$que = "UPDATE message SET is_approved = '{$app}'  where id = '{$id}'";
	$gets = mysql_query($que);
	echo "<center><h2>";
	echo "Message "." ".$id." is Approved.";
	echo "</h2>";
	echo "<br><a href='inboxpage.php'><button>Back to Inbox</button>";
}
?>
