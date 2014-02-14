<?php
	$con = mysql_connect("localhost","user2179168","Trytobeserious25788752");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("db2179168-bloodbank", $con); 

?>