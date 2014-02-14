<?php

	session_start();

	if(isset($_SESSION['username']))
	{
		$a=$_SESSION['username'];
	}	 
	$con = mysql_connect("localhost","user2179168","Trytobeserious25788752");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("db2179168-bloodbank", $con);
	
	$p=$_POST[presentadd];
	$q=$_POST[phone];
	$r=$_POST[dist];
	$s=$_POST[email];
	$t=$_POST[donationday];
	$u=$_POST[donationmonth];
	$v=$_POST[donationyear];
	
	$sql="UPDATE bloodbank set presentadd='$p' , phone= '$q', dist = '$r', email='$s', donationday='$t' , donationmonth='$u', donationyear='$v' WHERE username='$a' ";

	
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
	header( 'Location: profile.php' ) ;

	mysql_close($con);
?>