<?php
include "getAll.php";
mysql_connect('localhost','root') && mysql_select_db('message_db');

$name=$_POST['name'];
$form = getForms();
		foreach ($form as $list) {
			echo $list['id'];
			echo $list['message'];
		}
?>
<br>
<a href='insertionpage.php'><button>Back</button>
