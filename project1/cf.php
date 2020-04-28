<?php

//$conn_error='Could not connect!!';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='ojs';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) ||!mysql_select_db($mysql_db)) 
	{
	echo 'Unsuccessful';	//die(mysql_error());
	}
?>