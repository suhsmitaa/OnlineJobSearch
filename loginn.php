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
<div class="topbar animated fadeInLeftBig"></div>


<div id="login" class="container spacer login">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">LOGIN</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        
        <form class="form-horizontal" role="form" method="post" action="login.php">
   <div class="form-group">
    <label class="control-label col-sm-2" for="number">ID:</label>
    <div class="col-sm-10"> 
      <input type="integer" class="form-control" id="number" name="id" placeholder="Enter ID">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="uname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button class="btn btn-primary" type="submit">Login</button>
      </div>
  </div>
  </form>
  </div>
  </div>
  
<?php

require 'connect.php';
	if(isset($_POST['uname'])&&isset($_POST['password']))
	{
	$username = $_POST['uname'];
	$password = $_POST['password'];
		if(!empty($username)&&!empty($password))
		{
			$query="SELECT ID FROM user WHERE uname='$username'AND password='$password'";
			if (mysql_query($query))
			{
				echo 'Success!';
			}
		else
		{	
			echo mysql_error();
		}
		}
		else{
		echo'You must supply an username and password';
			}
	}
?>
	