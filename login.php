<?php
	include 'dbconnect.php';

	$a = $_POST['username'];
	$b = $_POST['password'];
	
	$result = mysql_query("SELECT * FROM admininfo WHERE username='$a' AND  password = '$b' ");
	$row = mysql_fetch_array($result);
	if($row)
	{
		header( 'Location: home2.php' ) ;
	}
	else
	{
		$result = mysql_query("SELECT * FROM bloodbank WHERE username='$a' AND  password = '$b' ");

		//mysql fetch array returns a string of $result which is showed in $row .
		$row = mysql_fetch_array($result);
	
		//select user from valid user id and the session starts
		if($row)
		{
			session_start();
			$_SESSION['username'] = $a;
			header( 'Location: profile.php' ) ;
		}
		else echo "<b>Login failed.<br/>";
	}
 	mysql_close($con);
?>