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

<script  language = "JavaScript" src="scripts/reg.js" type="text/javascript" > </script>

</head>

<body>

<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="update.php">edit profile</a></li>
			<li><a href="photos2.php">Photos</a></li>
			<li><a href="contact2.php">contact</a></li>
			<li class="last"><a href="destroy.php">logout</a></li>
		</ul>
	</div>
</div>
<div id="logo">
	<h1><a href="home.php"></a></h1>
	<h2></h2>
</div>
<!-- end header -->
</div>
<!-- start page -->
<div id="page">
	
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"><b>profile</b></h1>
			<div class="entry">
				<p>
				<?php					
					$con = mysql_connect("localhost","user2179168","Trytobeserious25788752");
					if (!$con)
					{
						die('Could not connect: ' . mysql_error());
					}

					mysql_select_db("db2179168-bloodbank", $con);
					$result = mysql_query("SELECT * FROM bloodbank where username = '$a'");
					while ($row = mysql_fetch_array($result))
					{
						echo "</br>";
						echo "Name: ";
						echo $row['fname'];
						echo " ";
						echo $row['lname'];
						echo "</br>";
							
						echo "Present Address: ";
						echo $row['presentadd'];
						echo "</br>";
							
						echo "Phone: ";
						echo $row['phone'];
						echo "</br>";
							
						echo "Email: ";
						echo $row['email'];
						echo "</br>";
					}
										
				?>
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
