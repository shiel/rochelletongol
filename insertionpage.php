<center>
<?php
mysql_connect('localhost','root') && mysql_select_db('message_db');
$query = "select * from message where is_approved='Y' ";
		$getInfo = mysql_query($query);
		$list = array();
		if(mysql_num_rows($getInfo) >0){
			while($row = mysql_fetch_assoc($getInfo)){
					$list[] = $row;
			}
}
?>
<table border='1'>
	<tr>
		<td><b>Name</b></td>
		<td><b>Message</b></td>
		<td><b>Date_Posted</b></td>
	</tr>
<?php foreach($list as $record): ?>
	<tr>
		<td><?php echo $record['name'];?></td>
		<td><?php  echo $record['message'];?></td>
		<td><?php  echo $record['date_posted'];?></td>
	</tr>
<?php endforeach;?>
</table>
	

</center>
<html>
<center>
<head><b>Post New Message</b></head>
<script type='text/javascript'>
function check_name(){
var name=document.getElementById('name').value;
if(name.length > 0){
return true;
}else{
document.getElementById('err_name').innerHTML='Enter your Name';
return false;
}
}

function check_email(){
var email=document.getElementById('email').value;
if(email.length > 0){
return true;
}else{
document.getElementById('err_email').innerHTML='Enter your Email';
return false;
}
}

function check_sms(){
var sms=document.getElementById('sms').value;
if(sms.length > 0){
return true;
}else{
document.getElementById('err_sms').innerHTML='Message';
return false;
}
}

function check_all(){
if(check_name() && check_email() && check_sms()){
return true;
}else{
alert('Kindly Fill Out the required field/s.');
return false;
}
}
</script>
</br>
<form method="post" action="insert.php">
<br>
<table border="1">
<tr>
<td>Name :
<input type='text' name='name' placeholder=' Name...' id='name' onblur="check_name()">
<span id='err_name'></span>
</td>
</tr>
<tr>
<td>Email :
<input type='text' name='email' placeholder=' Email...' id='email' onblur="check_email()">
<span id='err_email'></span>
</td>
</tr>
<tr>
<td>Message :
<textarea name='sms' placeholder='Type your Message...' id='sms' onblur='check_sms()'></textarea>
<span id='err_sms'></span>
</td>
</tr>
<tr><td><center>
<input type='submit' name='submit' value='POST MESSAGE' onclick=" return check_all()">
<input type='reset' value='Clear'></center></td></tr>
</center>
</table>
</form
</html>
