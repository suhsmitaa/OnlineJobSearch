<?php
require 'core.inc.php';
require 'connect.php';

//if(!loggedin()) {
	if(isset($_POST['fname'])&&isset($_POST['mname'])&&isset($_POST['lname'])&&isset($_POST['uname'])&&isset($_POST['address'])&&isset($_POST['password'])&&isset($_POST['contact'])&&isset($_POST['experience'])&&isset($_POST['qualifications']))
		{
	$fname =$_POST['fname'];
$mname =$_POST['mname'];
$lname =$_POST['lname'];
$uname=$_POST['uname'];
$address=$_POST['address'];
$password=md5($_POST['password']);
$contact=$_POST['contact'];
$experience=$_POST['experience'];
$qualifications=$_POST['qualifications'];


if(!empty($fname)&&!empty($mname)&&!empty($lname)&&!empty($uname)&&!empty($address)&&!empty($password)&&!empty($contact)&&!empty($experience)&&!empty($qualifications)){
     
     
	//echo mysql_num_rows($query_run);
	$query = "SELECT `fname`,`mname`,`lname`,`uname`,`address`,`password`,`contact`,`experience`,`qualifications` FROM `seeker` WHERE `fname`='$fname' AND `mname`='$mname' AND `lname`='$lname' AND `uname`='$uname' AND `address`='$address'AND `password`='$password' AND `contact`='$contact' AND `experience`='$experience' AND `qualifications`='$qualifications'";


	$query_run = mysql_query($query);

	

	if(mysql_num_rows($query_run)==1){


    echo 'The fname '.fname.'already exist.';
     	 
	}
	else {

	
	$insert = 'INSERT into `ojs`.`seiker`(`id`,`fname`, `mname`,` lname`,` uname`,` address`,` password`, `contact`, `experience`, `qualifications`) VALUES(NULL,"'.mysql_real_escape_string($fname).'","'.mysql_real_escape_string($mname).'","'.mysql_real_escape_string($lname).'","'.mysql_real_escape_string($uname).'","'.mysql_real_escape_string($address).'","'.mysql_real_escape_string($password).'","'.mysql_real_escape_string($contact).'","'.mysql_real_escape_string($experience).'","'.mysql_real_escape_string($qualifications).'");';


	mysql_query($insert);


$result = mysql_query($insert);

	if ($result = mysql_query($insert)){

				header('Location: sucess.php');

			}
			else{
				echo 'sorry couldnt registerd';
			}
	    }
}else
	echo "All fields are required";
}

//}//}
//else if(loggedin()) {

//	echo 'You\'re already registered and logged in.';
//}

?>