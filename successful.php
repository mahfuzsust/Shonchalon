<?php
session_start();
if(isset($_SESSION['username']))
    {
        $a = $_SESSION['username'];
    }
	else
	{
	header( 'Location: index.php' ) ;
	}
?>

<!DOCTYPE html>

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Shonchalon</title>
<meta name="keywords" content="shonchalon" />
<meta name="description" content="blood donation" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="index.php">Homepage</a></li>
			<li><a href="reg.php">Registration</a></li>
			<li><a href="photos.php">Photos</a></li>
			<li><a href="about.php">About</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</div>
<div id="logo">
	<h1><a href="#"></a></h1>
	<h2></h2>
</div>
<!-- end header -->
</div>
<!-- start page -->
<div id="page">
	
	<p> <b> <center> Thanks for registering. You can continue with log in. </center></b></p>
	<form action="home.php">
		<center><input type = "submit" id="x" value="Login"/></center>
	</form>
	
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->

<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal"> &copy2012. All Rights Reserved. Developed By: Mahfuz</p>
	</div>
</div>
<!-- end footer -->

</body>

</html>
