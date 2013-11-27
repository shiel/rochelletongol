<?php
function getForms(){
$query = "select * from message";
		$getInfo = mysql_query($query);
		$list = array();
		if(mysql_num_rows($getInfo) >0){
			while($row = mysql_fetch_assoc($getInfo)){
					$list[] = $row;
			}
		}
		return $list;
}
?>
