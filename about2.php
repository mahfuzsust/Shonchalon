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
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

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
			<h1 class="title"><b>about us</b></h1>
			<div class="entry">
				<p>
					This is a Blood Donation organization.......
					</br></br></br></br></br></br></br></br>
					
					It's still working for the improvement.
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
