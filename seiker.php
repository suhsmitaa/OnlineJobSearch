<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Online Job Search</title>


<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->

<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div id="signup2" class="container spacer login">
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">SIGN-UP JOB-SEEKER</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">First Name:</label>
      <div class="col-sm-10">
        <input type="Name" class="form-control" id="fname" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Middle Name:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="mname" name="mname" >
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Last Name:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="lname" name="lname">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="name" name="address" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Contact No.:</label>
      <div class="col-sm-10">          
        <input type="integer" class="form-control" id="number" name="contact">
      </div>
    </div>
    <fieldset id="gender">
    <div class="form-group">
  <label class="control-label col-sm-2" for="name">Gender:</label>
      <label class="radio-inline">
      <input type="radio" name="male">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="female">Female
    </label>
      
    </div>
    </fieldset>
  <fieldset id="marsts">
  <div class="form-group">
  <label class="control-label col-sm-2" for="name">Marital Status:</label>
      <label class="radio-inline">
      <input type="radio" name="marsts">Married
    </label>
    <label class="radio-inline">
      <input type="radio" name="marsts">Unmarried
    </label>
      
    </div>
    </fieldset>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Qualification:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="qualification" name="qualifications">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Experience:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="experience" name="experience">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-10">          
        <input type="name" class="form-control" id="name" name="uname">
      </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Re-Enter Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" >
    </div>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
        </div>
        
      </div>
      
    </div>
  </div>  
<?php
	require 'connect.php';
	require 'core.php';
	error_reporting(0);
if(!loggedin()) 
{
	if(isset($_POST['fname'])&&isset($_POST['mname'])&&isset($_POST['lname'])
	&&isset($_POST['address'])&&isset($_POST['contact'])&&isset($_POST['gender'])
	&&isset($_POST['experience'])&&isset($_POST['qualifications'])&&isset($_POST['maritalstatus'])
	&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['repassword']))
	{
	$fname =$_POST['fname'];
	$mname =$_POST['mname'];
	$lname =$_POST['lname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$experience=$_POST['experience'];
	$maritalstatus=$_POST['maritalstatus'];
	$qualifications=$_POST['qualifications'];
	$uname=$_POST['uname'];
	$password=($_POST['password']);
	$repassword=($_POST['password']);
	$password_hash=md5($password);

	if(!empty($fname)&&!empty($mname)&&!empty($lname)&&!empty($address)&&!empty($contact)&&!empty($gender)&&!empty($experience)
	&&!empty($qualifications)&&!empty($maritalstatus)&&!empty($username)&&!empty($password)&&!empty($repassword))
	{
     if($password!=$repassword){
	 echo 'Passwords do not match!';}
	 else{
	$query = "SELECT `fname`,`mname`,`lname`,`uname`,`address`,`password`,`contact`,`experience`,`qualifications` FROM `seeker` WHERE `fname`='$fname' AND `mname`='$mname' AND `lname`='$lname' AND `uname`='$uname' AND `address`='$address'AND `password`='$password' AND `contact`='$contact' AND `experience`='$experience' AND `qualifications`='$qualifications'";
		$query_run=mysql_query($query);
	
	if(mysql_num_rows($query_run)==1)
	{
		echo 'The username '.$uname.' already exists.';
	}
	else
	{
			$query= "INSERT into `seeker` VALUES
			('','".mysql_real_escape_string($fname)."',
			'".mysql_real_escape_string($mname)."',
			'".mysql_real_escape_string($lname)."',
			'".mysql_real_escape_string($address)."',
			'".mysql_real_escape_string($contact)."',
			'".mysql_real_escape_string($experience)."',
			'".mysql_real_escape_string($qualifications)."',
			'".mysql_real_escape_string($maritalstatus)."',
			'".mysql_real_escape_string($gender)."',
			'".mysql_real_escape_string($username)."',
			'".mysql_real_escape_string($password_hash)."')";
	if($query_run=mysql_query($query))
	{
		echo 'Successful!';
	}
	else
	{
		echo'Registration unsuccessful';
	}
	}		
			
	}
	}
	else{
	echo 'All fields are required';
		}
}
}	
?>