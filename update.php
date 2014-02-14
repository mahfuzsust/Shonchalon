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

<script type="text/javascript">
function validate_required(field,alerttxt)
{
	with (field)
	{
		if (value==null||value=="")
		{
			alert(alerttxt);return false;
		}
		else
		{
			return true;
		}
	}
}
function validate_dist(field,alerttxt)
{
	with (field)
	{
		if (value==null || value=="" || isNaN(value))
		{
			return true;
		}
		else
		{
			alert(alerttxt);
			return false;
		}
	}
}


function validate_email(field,alerttxt)
{
	with (field)
	{
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2)
		{
			alert(alerttxt);return false;
		}
		else 
		{
			return true;
		}
	}
}

function validate_form(thisform)
{
	if(validate_required(presentadd,"Present Address musht be filled out!")==false)
	{
		presentadd.focus();return false;
	}
	if(validate_required(phone,"Contact number musht be filled out!")==false)
	{
		phone.focus();return false;
	}
	if (validate_email(email,"Email must be filled out!")==false)
	{
		email.focus();return false;
	}
	if (validate_dist(dist,"Distance may be null or only numbers")==false)
	{
		dist.focus();return false;
	}
}		

</script>

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
			<h1 class="title"><b>update</b></h1>
			<div class="entry">
				<p>
				
					<form name='update_form' action="up.php" method="post" onsubmit="return validate_form(this)" >
					
					
					Present Address: <input type="text" name="presentadd"><br>
					Contanct No: <input type="text" name="phone"><br>
					Distance From The City: <input type="text" name="dist"> <br>
					Email: <input type="text" name="email"></br>
					Last Blood Donation Date:
					
					<select name="donationday">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select>

					<select name="donationmonth">
						<option> January </option>
						<option> February </option> 
						<option> March </option> 
						<option> April </option>
						<option> May </option>
						<option> June </option>
						<option> July </option>
						<option> August </option>
						<option> September </option>
						<option> October </option>
						<option> November </option>
						<option> December </option>
					</select>

					<select name="donationyear">
						<option>2012</option>
						<option>2011</option>
						<option>2010</option>
						<option>2009</option>
						<option>2008</option>
						<option>2007</option>
						<option>2006</option>
						<option>2005</option>
						<option>2004</option>
						<option>2003</option>
						<option>2002</option>
						<option>2001</option>
						<option>2000</option>
						<option>1999</option>
						<option>1998</option>
						<option>1997</option>
						<option>1996</option>
						<option>1995</option>
						<option>1994</option>
						<option>1993</option>
						<option>1992</option>
						<option>1991</option>
						<option>1990</option>
						<option>1989</option>
						<option>1988</option>
						<option>1987</option>
						<option>1986</option>
						<option>1985</option>
						<option>1984</option>
						<option>1983</option>
						<option>1982</option>
						<option>1981</option>
						<option>1980</option>
						<option>1979</option>
						<option>1978</option>
						<option>1977</option>
						<option>1976</option>
						<option>1975</option>
						<option>1974</option>
						<option>1973</option>
						<option>1972</option>
						<option>1971</option>
						<option>1970</option>
						<option>1969</option>
						<option>1968</option>
						<option>1967</option>
						<option>1966</option>
						<option>1965</option>
						<option>1964</option>
						<option>1963</option>
						<option>1962</option>
						<option>1961</option>
						<option>1960</option>
						<option>1959</option>
						<option>1958</option>
						<option>1957</option>
						<option>1956</option>
						<option>1955</option>
						<option>1954</option>
						<option>1953</option>
						<option>1952</option>
						<option>1951</option>
						<option>1950</option>
						<option>1949</option>
						<option>1948</option>
						<option>1947</option>
						<option>1946</option>
						<option>1945</option>
						<option>1944</option>
						<option>1943</option>
						<option>1942</option>
						<option>1941</option>
						<option>1940</option>
					</select>
					</br></br>
					<input type = "submit" id="x" name="submit" value="Submit"/>
					
					
					</form>
				
				
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
