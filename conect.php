<?php


$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="seeker";

mysql_connect("$host","$username","$password") or die(mysql_error());
echo "connected";
mysql_select_db("$database") or die(mysql_error());
echo "database found";

mysql_query("INSERT INTO $table(id,fname,mname,lname,uname,address,password,contact,experience,qualifications) VALUES(NULL,'timbu','sen','mes','ciisma','kup','cha','222','3 year','phd')") or die(mysql_error());

echo "data inserted";

mysql_close();
?>