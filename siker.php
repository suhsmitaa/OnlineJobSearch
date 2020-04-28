<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="siker";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());

$password=$_POST['password'];
$repw=$_POST['repw'];
$password_hash=md5($password);
$password_has=md5($repw);
$mysql ="INSERT INTO $table (fname,mname,lname,uname,address,password,contact,experience,qualifications,marital,gender,repassword) VALUES('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[uname]','$_POST[address]','".$password_hash."','$_POST[contact]','$_POST[experience]','$_POST[qualifications]','$_POST[marsts]','$_POST[gender]','".$password_has."')";

if($_POST[password]!=$_POST[repw]){

	echo "password donot match.";
}
else{

if(!mysql_query($mysql))
die(mysql_error());

echo"DATA INSERTED!";
}
mysql_close();

?>