<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="office";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());

$pword=$_POST['pword'];
$repw=$_POST['repw'];
$password_hash=md5($pword);
$password_has=md5($repw);
$mysql ="INSERT INTO $table(id,oname,otype,username,password,address,contact,email,repw) VALUES(NULL,'$_POST[oname]','$_POST[organizationtype]','$_POST[username]','".$password_hash."','$_POST[addr]','$_POST[Contact]','$_POST[email]','".$password_has."')";

if($_POST[pword]!=$_POST[repw]){

	echo "password donot match.";
}
else{


if(!mysql_query($mysql))
die(mysql_error());

echo"DATA INSERTED!";
}

mysql_close();


?>