<?php 

session_start();
$errors = '';

if(isset($_POST['submit']))
{
	if(strcmp($_POST['message'],$_SESSION['6_letters_code'])!=0)
	{
		$errors .= "\n The captcha code does not match!";
	}
	if(empty($errors))
	{
		header('Location: successful.php');
	}
}

?>


<html>

<head>
	
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>registration</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />


<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

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

function validate_pass(field,alerttxt)
{
	with (field)
	{
		if (value==null||value=="")
		{
			alert(alerttxt);return false;
		}
		else if(value.length<=6)
		{
			alert("Password must contain atleast 6 character");
			return false;
		}
		else
		{
			return true;
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

function pass_match(field1,field2,alerttxt)
{
	with(field1)
	{
		if (value==null||value=="")
		{
			alert("Retype your password");return false;
		}
		if(value!=field2.value)
		{
			alert(alerttxt);
			return false;
		}
		else return true;
	}
}

function validate_bloodgroup()
{
	var element = document.contact_form.bloodgroup;
	for (var i=0; i < element.length; i++)
	{
		if (element[i].checked)
		{
			var group = element[i].value;
			return true;
		}
	}
	return false;
}

function validate_agreement()
{
	var element = document.contact_form.agreement;
	if(element.checked) return true;
	else return false;
}

function validate_form(thisform)
{
	with (thisform)
	{
		if(validate_required(fname,"Firstname musht be filled out!")==false)
		{
			fname.focus();return false;
		}
		if(validate_required(lname,"Lastname musht be filled out!")==false)
		{
			lname.focus();return false;
		}
		if(validate_required(fathername,"Fathername musht be filled out!")==false)
		{
			fathername.focus();return false;
		}
		if(validate_required(mothername,"Mothername musht be filled out!")==false)
		{
			mothername.focus();return false;
		}		
		if(validate_required(username,"Username musht be filled out!")==false)
		{
			username.focus();return false;
		}
		if(validate_pass(password,"Password musht be filled out!")==false)
		{
			password.focus();return false;
		}
		if(pass_match(repassword,password,"Password didn't match!")==false)
		{
			repassword.focus();return false;
		}
		if(validate_required(presentadd,"Present Address musht be filled out!")==false)
		{
			presentadd.focus();return false;
		}
		if(validate_required(parmanentadd,"Parmanent Address musht be filled out!")==false)
		{
			parmanentadd.focus();return false;
		}
		if(validate_required(phone,"Contact number musht be filled out!")==false)
		{
			phone.focus();return false;
		}
		if (validate_email(email,"Email must be filled out!")==false)
		{
			email.focus();return false;
		}
		if(validate_bloodgroup()==false)
		{
			alert("Please enter the bloodgroup");
			return false;
		}
		if(validate_required(registration_no,"Registration No musht be filled out!")==false)
		{
			registration_no.focus();return false;
		}
		if(validate_agreement()==false)
		{
			alert("You are not agreed to the terms and conditions");
			return false;
		}
	}
}
</script>


<script language="JavaScript" src="scripts/sample-registration-form-validation.js" type="text/javascript"></script>


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

<div id="page">
<form name='contact_form' action="signup_ac.php" method="post" onsubmit="return validate_form(this)" >
<!--<form name='contact_form' action="insert.php" method="post" onsubmit="return validate_form(this)" >-->
</br></br></br></br>

	<div id="content">
		<div class="post">
			<h1 class="title"><b>personal Information</b></h1>
			<div class="entry">
				<p>
				
						<label for="fname">First Name</label>
						<input type="text" name="fname" />
						
						</br>
						
						<label for="lname"> Last Name </label>
						<input type="text" name="lname" size="20" />
					
					</br></br>
					
					Father's Name: <input type="text" name="fathername"></br>
					Mother's Name: <input type="text" name="mothername"></br>

					</br></br>

					Sex: 
					<input type="radio" name="sex" checked value="Male" id="sex_male">Male</br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="radio" name="sex" value="Female" id="sex_female">Female</br></br>
					
					Date Of Birth:

					<select name= "day">
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

					<select name="month">
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

					<select name="year">

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
				</p>		
			</div>
		</div>	
	</div>

	<div id="content">
		<div class="post">
			<h1 class="title"><b>login information</b></h1>
			<div class="entry">
				<p>
				
					UserName: <input type="text" name="username"></br></br>
					Password: <input type="password" name="password"></br>
					ReType Password: <input type="password" name="repassword"></br>

					</br></br>

				</p>		
			</div>			
		</div>	
	</div>

	<div id="content">
		<div class="post">
			<h1 class="title"><b>contact information</b></h1>
			<div class="entry">
				<p>
				
					Present Address: <input type="text" name="presentadd"><br>
					Parmanent Address: <input type="text" name="parmanentadd"><br>
					Contanct No: <input type="text" name="phone"><br>
					Distance From The City: <input type="text" name="dist"> <br>
					Email: <input type="text" name="email"></br>

					</br></br>

				</p>		
			</div>			
		</div>	
	</div>

	<div id="content">
		<div class="post">
			<h1 class="title"><b>blood donation</b></h1>
			<div class="entry">
				<p>
				
					Blood Group:
						<input type="radio" name="bloodgroup" value="A+">A+
						<input type="radio" name="bloodgroup" value="B+">B+
						<input type="radio" name="bloodgroup" value="O+">O+
						<input type="radio" name="bloodgroup" value="AB+">AB+<br>

						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
						<input type="radio" name="bloodgroup" value="A-">A-
						<input type="radio" name="bloodgroup" value="B-">B-
						<input type="radio" name="bloodgroup" value="O-">O-
						<input type="radio" name="bloodgroup" value="AB-">AB-<br></br>

					Last Blood Donation Date:
					
					<select name="donationday">
						<option>--</option>
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
						<option>--</option>
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
						<option>--</option>
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
				</p>		
			</div>			
		</div>	
	</div>

	<div id="content">
		<div class="post">
			<h1 class="title"><b>professional information</b></h1>
			<div class="entry">
				<p>
				
					<u>Profession</u>:
					<select name="profession">
						<option>Student</option>
						<option>Teacher</option>
						<option> Job</option>
						<option> Others</option>
					</select>
					</br>
					
					Educational Institute: 
					<select name="university">
						<option> Sahjalal University of Science & Technology </option>
					</select>
					</br>
					
					<p>This is only applicable if only student:</br></br>
					
					Department:
					<select name="dept">
						<option> CSE </option>
						<option> PHY </option>
						<option> EEE </option>
						<option> CEP </option>
						<option> IPE </option>
						<option> GEB </option>
						<option> MAT </option>
						<option> ECO </option>
						<option> BAN </option>
						<option> ENG </option>
						<option> STA </option>
						<option> CEE </option>
						<option> PGE </option>
						<option> PAD </option>
						<option> FTT </option>
						<option> ANP </option>
						<option> ARC </option>
						<option> FES </option>
						<option> PSS </option>
						<option> CHE </option>
						<option> SOC </option>
						<option> SOW </option>
					</select>
					</br>
					
					Registration No: <input type="text" name="registration_no"> </br></br></br></br>
					</p>
					
					<!-- START CAPTCHA CODE -->
					
					<p>
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
						<label for='message'>Enter the code above here :</label><br>
						<input id="6_letters_code" name="6_letters_code" type="text"><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
					</p>
					
					<!-- END CAPTCHA CODE -->
					
					
					</br></br>
					<input type="checkbox" name = "agreement" value="agree"> I have read the <a href = "#">terms and conditions</a> 
					
					<?php
						if(isset($_POST['submit']))
						{
							if((isset($_POST['agreement']))!="selected")
							{
								echo "<br/><span class='error'>You must agree with our terms and policies.</span>";
								$a=0;									
							}
						}
					?>
					
					</br></br></br></br>
					 
					<input type = "submit" id="x" name="submit" value="Submit"/>
					
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					
					<input type = "reset" name="Clear" value="Clear"/>

				</p>		
			</div>
		</div>
	</div>

	</form>

	
	<div style="clear: both;">&nbsp;</div>
	
	
</div>

<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal"> &copy2012. All Rights Reserved. Developed By: Mahfuz</p>
	</div>
</div>
<!-- end footer -->
</body>

</html>
