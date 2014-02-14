<?php

include('config.php');

// table name 
$tbl_name="temp_members_db";

// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$sex=$_POST['sex'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$username=$_POST['username'];
$password=$_POST['password'];
$presentadd=$_POST['presentadd'];
$parmanentadd=$_POST['parmanentadd'];
$phone=$_POST['phone'];
$dist=$_POST['dist'];
$email=$_POST['email'];
$bloodgroup=$_POST['bloodgroup'];
$donationday=$_POST['donationday'];
$donationmonth=$_POST['donationmonth'];
$donationyear=$_POST['donationyear'];
$profession=$_POST['profession'];
$university=$_POST['university'];
$dept=$_POST['dept'];
$registration_no=$_POST['registration_no'];


// Insert data into database 
$sql="INSERT INTO $tbl_name(fname,lname,fathername,mothername,sex,day,month,year,username,password,presentadd,parmanentadd,phone,dist,email,bloodgroup,donationday,donationmonth,donationyear,profession,university,dept,registration_no,confirm_code) VALUES('$fname','$lname','$fathername','$mothername','$sex','$day','$month','$year','$username','$password','$presentadd','$parmanentadd','$phone','$dist','$email','$bloodgroup','$donationday','$donationmonth','$donationyear','$profession','$university','$dept','$registration_no','$confirm_code')";
$result=mysql_query($sql);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to="don.mahfuz@gmail.com";

// Your subject
$subject="Your confirmation link here";

// From
$headers="www7.subdomain.com";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://mahfuz.com.nu/web/confirmation.php?passkey=$confirm_code";

// send email
$sentmail = mail($to,$subject,$message,$headers);
}

// if not found 
else 
{
	echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail)
{
	echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else 
{
	echo "Cannot send Confirmation link to your e-mail address";
}
?>