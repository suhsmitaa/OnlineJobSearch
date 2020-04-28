<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="response";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());

$password=$_POST['password'];
$repw=$_POST['repw'];
$password_hash=md5($password);
$password_has=md5($repw);
$mysql ="INSERT INTO $table (response) VALUES('$_POST[response]')";

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