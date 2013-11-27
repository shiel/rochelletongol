<?php



if(isset($_POST['submit'])){

mysql_connect('localhost','root') && mysql_select_db("message_db");

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['sms'];

$query="INSERT INTO message".
	"(name,email,message,date_posted,is_approved)".
	"VALUES ('$name','$email','$msg',CURRENT_DATE(),'N')";

$return=mysql_query($query);
if(!$return){
die ("Somethong went wrong. ".mysql_error());
}
echo "<center>Message Sent." . "<br><br>" . "<a href='sentItems.php'><button>Sent Items</button>"; 
echo "<a href='inboxpage.php'><button>Inbox</button></center>";

}

?>
