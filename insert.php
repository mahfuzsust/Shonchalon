<?php
$con = mysql_connect("localhost","user2179168","Trytobeserious25788752");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("shonchalon", $con);

$sql="INSERT INTO bloodbank (fname,lname,fathername,mothername,sex,day,month,year,username,password,presentadd,parmanentadd,phone,dist,email,bloodgroup,donationday,donationmonth,donationyear,profession,university,dept,registration_no)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[fathername]','$_POST[mothername]','$_POST[sex]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[username]','$_POST[password]','$_POST[presentadd]','$_POST[parmanentadd]','$_POST[phone]','$_POST[dist]','$_POST[email]','$_POST[bloodgroup]','$_POST[donationday]','$_POST[donationmonth]','$_POST[donationyear]','$_POST[profession]','$_POST[university]','$_POST[dept]','$_POST[registration_no]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header( 'Location: successful.php' ) ;

mysql_close($con)
?>