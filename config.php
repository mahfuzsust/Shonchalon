<?php

$host="localhost"; // Host name 
$username="user2179168"; // Mysql username 
$password="Trytobeserious25788752"; // Mysql password 
$db_name="db2179168-bloodbank"; // Database name 

//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>