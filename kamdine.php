<?php

$host="localhost";
$username="root";
$password="";
$database="ojs";
$table="kaamdine";

mysql_connect("$host","$username","$password") or die(mysql_error());

mysql_select_db("$database") or die(mysql_error());


$mysql ="INSERT INTO $table (jobtitle,noofvaccancies,joblocation,jobtype,jobcat,subcat,jobpostedon,applybefore,salary,level,agerange,gender,educationqualification,pye,jd,js,cname,address) VALUES('$_POST[jobtitle]','$_POST[noofvaccancies]','$_POST[joblocation]','$_POST[jobtype]','$_POST[jobcat]','$_POST[subcat]','$_POST[jobpostedon]','$_POST[applybefore]','$_POST[salary]','$_POST[level]','$_POST[agerange]','$_POST[gender]','$_POST[educationqualification]','$_POST[pye]','$_POST[jd]','$_POST[js]','$_POST[cname]','$_POST[address]')";


if(!mysql_query($mysql))
die(mysql_error());

echo"DATA INSERTED!";
mysql_close();

?>
