<?
	$con = mysql_connect("localhost","lsh0131","gi757001!!");
	if(!$con){
		die('Could not connect : ' . mysql_error());
	}

	mysql_select_db("lsh0131", $con);
?>