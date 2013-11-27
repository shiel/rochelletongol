<center>
<font size='4'>
<b>Inbox</b>
</font>
</center>
<?php
include 'getAll.php';
mysql_connect('localhost','root') && mysql_select_db('message_db');

		$form = getForms();
		$rej = "reject.php?id=";
		$del = "delete1.php?id=";
		$appr="approved.php?id=";

		echo "<center>";
		echo "<table border = '1'>";
		echo "<tr><td><b>"."Id"."</td>"
				."<td><b>"."Name"."</td>"
				."<td><b>"."Email"."</td>"
				."<td><b>"."Message"."</td>"
				."<td><b>"."Date_Posted"."</td>"
				."<td><b>"."is_approved"."</td>"
				."<td colspan='3'><b><center>Actions</center></td></tr>";
		
		foreach ($form as $list) {
			echo "<tr>
				<td>".$list['id']."</td>"
				."<td>".$list['name']."</td>"
				."<td>".$list['email']."</td>"
				."<td>".$list['message']."</td>"
				."<td>".$list['date_posted']."</td>"
				."<td>".$list['is_approved']."</td>"
				."<td>";
if($list['is_approved'] == 'Y'){
			echo "<form method ='post' action = ".$rej.$list['id']."> <input type ='submit' name ='reject' value = 'Ignore'></form></td>";
		}else{
echo "<form method ='post' action = '".$appr.$list['id']."'> <input type ='submit' name = 'approved' value = 'Approved'></form></td>";
}

echo "<td>"."<form method ='post' action = ".$del.$list['id'].
				"> <input type ='submit' name = 'delete' value = 'Delete'></form></td></tr>";
		}
		echo "</table>";
		echo "<center><a href='sentItems.php'><button>Sent Items</button>". 
		"<a href='insertionpage.php'><button>Back</button></center>";

?>
