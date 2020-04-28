<?php
require 'core.inc.php';
require 'config.php';

if(loggedin()){

	$fname = getuserfield('fname');
	$mname = getuserfield ('mname');
	$lname = getuserfield('lname');
	$address = getuserfield('address');
	$password = getuserfield('password');
	$contact = getuserfield('contact');
	$experience = getuserfield('experience');
	$qualifications= getuserfield('qualifications');
	echo 'youre logged in,'.$fname.''.$mname.''.$lname.''.address.''.password.''.contact.''.experience.''.qualifications.'. <a href="logout.php">LOGOUT</a><br>';
}
else{

	include 'logn.php';
}

?>