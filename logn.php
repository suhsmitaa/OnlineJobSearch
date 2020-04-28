<?php

if(isset($_POST['username'])&&isset($_POST['password'])){

	$uname=$_POST['username'];
	$password = $_POST['password'];
	if(!empty($username)&&!empty($password)){

		$query = "SELECT `username` FROM `login` WHERE `username`='$username'AND `password`='$password'";
		if($query_run = mysql_query($query)){
			$query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows==0){
				echo 'invalid';
			}
			else if($query_num_rows==1){
				$user_id = mysql_result($query_run,0,'id');
			}
		}
	}
	else{
		echo 'You must give ur uname n pw.';
	}
}
?>