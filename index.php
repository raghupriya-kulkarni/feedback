<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Student feedback System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Student feedback System</a>
				
				
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>				
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feed.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feed2.png');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feed3.png');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">	
			<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">
				<h2>About feedback System</h2>
				Student Feedback system for College in PHP(SOurce code) 
Here we have developed the a faculty feedback system, which is generally used in the college to rate the faculty based on the performance...Here we have 2 modules such as administrator, student.

Administrator is the one who creates the student account by adding all student info and assigning the username and password. 
Admin als0 checks the result once all students entered the feedback..
We can start the development from the login page, where we have given the option to login as admin and student...Here since we have only one admin account, so no need to create the a database to store admin info...so the admin username is "admin" and password is "sandeep"...select admin in the radio button and login 

You can perform all admin actions such as login to the account and check result..

I fyou entered the student user and password and selected student option, then it will show all student information and let you enter the feedback based on the subject..

Before we can look into the php code, you need to create a database called "feed" with two tables in it..one as student and another one as take
	
			</div>
				<?php } ?>
            </div>
            
    </div>
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">STUDENT FEEDBACK SYSTEM</span>
	</div>
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000
    })
    </script>
</body>
</html>