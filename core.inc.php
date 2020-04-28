<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
//$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin() {

	if (isset($_SESSION['username'])&&!empty($_SESSION['username'])){

		return true;

	}
	else{

		return false;
	}
}

function getuserfield($field) {

	$query = "SELECT `$username` FROM `login` WHERE `username`='".$SESSION['username']."'";
	if($query_run = mysql_query($query)) {
		if($query_result($query_run, 0 ,$field)) {
			return $query_result ;
		};
	}
}
?>