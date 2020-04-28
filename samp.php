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

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logomaker.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign-Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#signup1">As Employer</a></li>
          <li><a href="#signup2">As Job-Seeker</a></li>
          
        </ul>
      </li>
                <li ><a href="#login">Login</a></li>
                 
                 <li ><a href="#contact">Feedback</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/job1.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/job2.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/job3.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/job4.jpg" alt="banner">
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>









<!-- about Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Searching for a Job</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="intro"></i> Introduction </h4>
    <p>Online Job Search (OJS) is a web application designed to provide facility to search jobs online. The main objective of the proposed system is to allow the user to search for, look at and apply for available jobs at any time. 
The proper utilization of the application can allow the job seeker to search most applicable listings available, all while showcasing themselves to potential employers and recruiters. These postings can also enable them to better understand which positions they would truly be a good fit for, rather than just being a jumbled list of necessary skills. 
The developed system only deals with the information that are stored in the database. </p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="aim"></i>Aims</h4>
  <p> This system saves time for searching jobs. It also gives better platform for employers to select their qualified candidates. With this, unemployment rate can also be reduced.  Our system provides 100% satisfaction to the job seekers as they can choose the job of their own choice. Our online job application seemingly makes life easier for all parties. For job seekers, for instance it avoids having to print up resumes on pricey paper ad. Instead they just need to fill out the little boxes, hit send and the process is completed.
It's frustrating to find a job opening that lacks a well-defined job description and list of qualifications. In this context, OJS application tends to feature the available job listings that are both thorough and definitive. Due to the focused nature of online job searching, listings are generally populated by only highly-interested applicants and these kinds of candidates aren't just applying to every listing they find within their field.</p>    
  </div>
  </div>

  
<!-- #Cirlce Ends -->


<!--signup1-->
<div id="signup1" class="container spacer login">
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">SIGN-UP AS EMPLOYER</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <form class="form-horizontal" method="post" role="form" action="office.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Organization's Name:</label>
      <div class="col-sm-10">
        <input type="Name" class="form-control" name="oname" id="name" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Address:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" name="addr" id="name" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Contact No.:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="Contact" id="number" >
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
        <input type="name" class="form-control" name="username" id="name" >
      </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pword" id="pwd" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Re-Enter Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="repw" id="pwd" >
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
    <!--signup1 ends-->

    <!--signup2-->
    <div id="signup2" class="container spacer login">
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">SIGN-UP JOB-SEEKER</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
      <form class="form-horizontal" role="form" method="POST" action="fin.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">First Name:</label>
      <div class="col-sm-10">
        <input type="Name" class="form-control" id="fname" name="fname"
        >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Middle Name:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="mname" name="mname"  >
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Last Name:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="lname" name="lname" >
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
        <input type="integer" class="form-control" id="number" name="contact" >
      </div>
    </div>
    <fieldset id="gender">
    <div class="form-group">
  <label class="control-label col-sm-2" for="name">Gender:</label>
      <label class="radio-inline">
      <input type="radio" name="gender" value="male">Male
      </label>
      <label class="radio-inline">
      <input type="radio" name="gender" value="female">Female
    </label>
      
    </div>
    </fieldset>
  <fieldset id="marsts">
  <div class="form-group">
  <label class="control-label col-sm-2" for="name">Marital Status:</label>
      <label class="radio-inline">
      <input type="radio" name="marsts" value="married">Married
    </label>
    <label class="radio-inline">
      <input type="radio" name="marsts" value="unmarried">Unmarried
    </label>
      
    </div>
    </fieldset>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Qualification:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="qualifications" name="qualifications" >
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Experience:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="experience" name="experience" >
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-10">          
        <input type="Name" class="form-control" id="uname" name="uname">
      </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name="password" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Re-Enter Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="repw" id="pwd" >
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
    
<!--login-->
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
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
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
<!--contact starts-->
<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center" >
<h2 class="text-center  wowload fadeInUp">Your response</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        
        <textarea rows="10" placeholder="Message"></textarea>
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->
<!-- Footer Starts -->
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
