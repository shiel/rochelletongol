<?php
mysql_connect('localhost','root') && mysql_select_db('message_db');
	$id=$_GET['id'];
	$que= "select * from message where id='{$id}'";
	$retval=mysql_query($que);
	$row=mysql_fetch_assoc($retval);
?>
<html>
<center>
	<form method = 'post' action = 'deleted.php'>
		<h2>Do you really want to delete this  message ?</h2>
		<input type = 'hidden' name = 'name' value = "<?=$row['name']?>">
		<input type = 'hidden' name = 'email' value = "<?=$row['email']?>">
		<table>
			<td><input type = 'submit' value = 'Yes' name = 'yes'></td>
	</form>
	<form method = 'post' action = 'sentItems.php'>
			<td><input type = 'submit' value = 'No' name = 'no'></td>
</center>
</html>
