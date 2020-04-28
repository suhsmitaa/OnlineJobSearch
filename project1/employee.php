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
<div id="signup1" class="container spacer login">
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">SIGN-UP AS EMPLOYER</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <form class="form-horizontal" method="post" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Organization's Name:</label>
      <div class="col-sm-10">
        <input type="Name" class="form-control" name="oname"id="name" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" name="addr"id="name" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Contact No.:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="Contact"id="number" >
      </div>
    </div>
  
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" name="email" id="email" >
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Organization Type:</label>
      <div class="col-sm-10">          
        <select name="organizationtype" id="otype" class="form-control">
    <option value>--Select One--</option>
    <option value="Advertising Agency">Advertising Agency</option>
    <option value="Airlines">Airlines</option>
    <option value="Interior Designer">Interior Designer</option>
    </select>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-10">          
        <input type="name" class="form-control"name="username" id="name" >
      </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pword"id="pwd" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Re-Enter Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control"  id="pwd" >
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
if(!loggedin()) 
{
	if(isset($_POST['oname'])&&isset($_POST['otype'])
	&&isset($_POST['username'])&&isset($_POST['pword'])&&isset($_POST['addr'])
	&&isset($_POST['contact'])&&isset($_POST['email']))
	{
	$oname =$_POST['oname'];
	$otype =$_POST['otype'];
	$username=$_POST['username'];
	$pword=$_POST['pword'];
	$addr=$_POST['addr'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$repword=($_POST['pword']);
	$pword_hash=md5($pword);

	if(!empty($oname)&&!empty($otype)&&!empty($username)&&!empty($pword)&&!empty($addr)&&!empty($contact)
	&&!empty($email)&&!empty($repword))
	{
     if($pword!=$repword){
	 echo 'Passwords do not match!';}
	{
     	 $query="SELECT username FROM employer WHERE username='$username'";
		$query_run=mysql_query($query);
	
	if(mysql_num_rows($query_run)==1)
	{
		echo 'The username '.$uname.' already exists.';
	}
	else
	{
			$query= "INSERT into `employer` VALUES
			('','".mysql_real_escape_string($eid)."',
			'".mysql_real_escape_string($oname)."',
			'".mysql_real_escape_string($otype)."',
			'".mysql_real_escape_string($username)."',
			'".mysql_real_escape_string($pword)."',
			'".mysql_real_escape_string($addr)."',
			'".mysql_real_escape_string($contact)."',
			'".mysql_real_escape_string($email)."',
			'".mysql_real_escape_string($pword_hash)."')";
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