<?php
 
	$con = mysql_connect("localhost","user2179168","Trytobeserious25788752");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("db2179168-bloodbank", $con);
	
	$p=$_POST[id];
	
	$sql="DELETE from bloodbank where id= '$p'";
	
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
	header( 'Location: home2.php' ) ;

	mysql_close($con);
?>