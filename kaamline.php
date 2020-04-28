<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="kaamline";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());


$mysql ="INSERT INTO $table(id,name,nationality,dob,homeph,mobileno,caddress,paddress,email,aemail,category,joblocation,keyword,jobtype,xtra,qualifications,university,languages,experience,esalary) VALUES(NULL,'$_POST[name]','$_POST[nationality]','$_POST[dob]','$_POST[homeph]','$_POST[mobileno]','$_POST[caddress]','$_POST[paddress]','$_POST[email]','$_POST[aemail]','$_POST[category]','$_POST[joblocation]','$_POST[keyword]','$_POST[jobtype]','$_POST[xtra]','$_POST[qualifications]','$_POST[university]','$_POST[languages]','$_POST[experience]','$_POSTe[salary]')";


if(!mysql_query($mysql))
die(mysql_error());

echo"DATA INSERTED!";
mysql_close();

?>