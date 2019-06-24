<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 include("database.php");
 
 if(isset($_POST["submit"]))
 {
    $name=$_POST["hname"];
	$city=$_POST["city"];
    
    $un=$_POST["username"];
	$pass=$_POST["password"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$target_fileone = $target_dir . basename($_FILES["license"]["name"]);
	move_uploaded_file($_FILES["license"]["tmp_name"], $target_fileone);

    $suc=mysqli_query($con,"INSERT INTO `hotel`(`hname`,`hcity`,`image`,`license`,`uname`,`pass`,`status`,`type`,`approve`) VALUES('$name','$city','$target_file','$target_fileone','$un','$pass',1,'1',1)");

	
	echo "<script>alert('Registration succes! approvel pending! username:$un; and password:$pass;');window.location.href='hlogin.php';</script>";
	
	
	


	
 }
	?>
	
	

<!DOCTYPE html>
<html>
<head>
<title>Around a Travel Category Flat Bootstrap responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Around Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/oh-autoval-style.css" type="text/css" />

<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/oh-autoval-script.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-info">
					<div class="top-header-left wow fadeInLeft animated" data-wow-delay=".5s">
						<p>More than 10 new destinations for your trip</p>
					</div>
					<div class="top-header-right wow fadeInRight animated" data-wow-delay=".5s">
						<div class="top-header-right-info">
							<ul>
								<div><li><a href="login.php">Login</a></li></div>
								<div><li><a href="signup.php">Sign up</a></li></div>
								<li><a href="hotelregistration.php">hotel registration</a></li>
							</ul>
						</div>
					<!--<div class="social-icons">
							<ul>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="twitter facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter google" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>-->
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
					<h1><a href="index.html"><img src="images/logo.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<!--<li><a href="codes.html">Codes</a></li>-->
							
									<ul class="dropdown-menu">
									
										<!--<li><a class="hvr-bounce-to-bottom" href="gallery2.html">Gallery2</a></li>-->         
									</ul>
								</li>	
								<!--<li><a href="blog.html">Blog</a></li>-->
								<li><a href="contact.php">Contact</a></li>
							</ul>	
							<div class="clearfix"> </div>
						</div>	
					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	
	<!-- login -->
	<div class="login">
		<div class="container">
			<div class="login-body">
				<div class="login-heading">
					<h1>HOTEL REGISTRATION</h1>
				</div>
				<div class="login-info">
					<form action="#" method="POST" onsubmit="return" enctype="multipart/form-data">
						<textarea rows="1"  name="hname" class=" form-control av-name" av-message="only name" placeholder="hotel Name" required=""></textarea><br>
						<textarea row="1"   name="city"  placeholder="city" required=""></textarea><br>
						 image<br>
						<input type="file"  name="image"   class=" form-control av-image" av-message="only image" required="">
						License<br>
						<input type="file"  name="license"  class=" form-control av-image" av-message="only image"  required=""><br>
						<textarea rows="1"  name="username"  class=" form-control av-name" placeholder="username" required=""></textarea><br>
						<input type="password"  name="password"  class="form-control av-password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." placeholder="Password"  placeholder="password" required="">
						<input type="submit" name="submit" value="Sign up">
						<div class="signup-text">
							<a href="login.php">Already have an account? Login here.</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- //login -->
	
	<!-- footer -->
	<!--<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>Navigation</h4>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery1.html">Gallery</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-5 footer-nav wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Newsletter</h4>
					<p>Nunc non feugiat quam, vitae placerat ipsum. Cras at felis congue, volutpat neque eget</p>
					<form>
						<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-4 footer-nav wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Latest News</h4>
					<div class="news-grids">
						<div class="news-grid">
							<h6>09/01/2016 : <a href="single.html">Cras at felis congue</a></h6>
							<h6>13/07/2016 : <a href="single.html">Volutpat neque eget</a></h6>
							<h6>13/02/2016 : <a href="single.html">Agittis tellus ut dictum</a></h6>
							<h6>28/11/2016 : <a href="single.html">Habitant morbi et netus</a></h6>
							<h6>19/01/2016 : <a href="single.html">pellentesque habitant morbi</a></h6>
							<h6>23/02/2016 : <a href="single.html">Maecenas volutpat lacus</a></h6>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright wow fadeInUp animated" data-wow-delay=".5s">
				<p>© 2016 Around . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	//footer -->
	 
</body>	
</html>