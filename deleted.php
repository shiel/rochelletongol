<?php
mysql_connect('localhost','root') && mysql_select_db('message_db');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$query = "DELETE from message where name = '{$name}' and email= '{$email}'";
	$result = mysql_query($query);	
	echo "<center><h2>";
	echo "<script>alert('Deleted Successfully.');window.location.href='sentItems.php';</script>";
?>
