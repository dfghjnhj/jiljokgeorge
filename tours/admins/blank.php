<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>
<?php
session_start();

if(!isset($_SESSION['u_id']))
header("location:../index.php");
	?>
	<?php 
if(isset($_POST["submit"]))
 {
	include("database.php");
		$place=$_POST["place"];
		$needs=$_POST["needs"];
	
    $suc=mysqli_query($con,"INSERT INTO `tbl_ad`(`place`,`needs`) VALUES('$place','$needs')");
     
			
				header("location:index.php");
 }
	?>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
						<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="#"> <h1>ADMIN</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
						
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
						
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<!--<span class="prfil-img"><img src="images/p1.png" alt=""> </span> -->
												<div class="user-name">
													<p>ADMIN</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="logout.php"><i class="fa fa-cog"></i>Log out</a> </li> 
											<!--<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>-->
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="login-page">
	<div class="login-main">  	
		 <div class="login-head">
			<h1>Add Advertaisment</h1>
		</div>
		<div class="login-block">
			<form action="#" method="post">
				<input type="text" name="place" placeholder="place" required="">
				details
		    <textarea rows="5" name="needs"  required=""></textarea>
				<div class="forgot-top-grids">
					
				
					<div class="clearfix"> </div>
				</div>
				<input type="submit" name="submit" value="Register">	
			
				
			</form>
			
		</div>
		</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
<div class="sidebar-menu">
		  	 
				 <div class="menu">
					 <ul id="menu" >
						 <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
					 
						 <!--<li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>-->
						 <li><a href="#"><!--<i class="fa fa-envelope"></i>--><span>packages</span><span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									 <!--<li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>-->
									 <li id="menu-academico-boletim" ><a href="addpackage.php">Add Package</a></li>
									 <li id="menu-academico-boletim" ><a href="viewpackage.php">view packages</a></li>
									</ul>
						 </li>
							<li><a href="#"><!--<i class="fa fa-cog"></i>--><span>Vehicles</span><span class="fa fa-angle-right" style="float: right"></span></a>
								 <ul id="menu-academico-sub" >
									 <li id="menu-academico-avaliacoes" ><a href="vehicles.php">add rental vehicles</a></li>
									 <li id="menu-academico-avaliacoes" ><a href="vehicles.php">view registerd vehicles</a></li>
									<!-- <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>-->
									</ul>
							</li>
							<li><a href="#"><span>add advertaisment</span><span class="fa fa-angle-right" style="float: right"></span></a>
								<ul id="menu-academico-sub" >
									 <li id="menu-academico-avaliacoes" ><a href="blank.php">Add</a></li>
									 
							</li>
					 </ul>
				 </div>
		</div>
	 <div class="clearfix"> </div>
 </div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
