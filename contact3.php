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
			<li><a href="home2.php">Homepage</a></li>
			<li><a href="photos3.php">Photos</a></li>
			<li><a href="adminpanel.php">info</a></li>
			<li><a href="delete.php">delete</a></li>
			<li><a href="about2.php">About</a></li>
			<li><a href="contact3.php">contact</a></li>
			<li class="last"><a href="destroy.php">logout</a></li>
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
	
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"><b>contact information</b></h1>
			<div class="entry">
				<p>
					<b>Md. Mahfuzur Rahman</b></br>
					<b>CSE, SUST</b></br>
					<b>Reg: 2008331060</b></br>
					<b>Phone: 01717097027</b></br>
				
				</p>		
			</div>
		</div>
	
	</div>
	<!-- end content -->
	
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
