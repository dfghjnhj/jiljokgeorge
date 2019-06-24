<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->
<!DOCTYPE HTML>
<html>
<head><!--
<?php
 include("database.php");
 
 if(isset($_POST["submit"]))
 {
	$btype=$_POST["btype"];
		$bname=$_POST["bname"];
		$bnumber=$_POST["bnumber"];
	$bdetails=$_POST["bdetails"];
  
    $bseat=$_POST["bseat"];
   
		$bac=$_POST["ac"];
		$bsleeper=$_POST["sleeper"];
		$bcoast=$_POST["bcoast"];
		$pdetails=$_POST["pdetails"];
		$dis=$_POST['dis'];
		//$pfacilities=$_POST["pfacilities"];
		$pmore=$_POST["message"];
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["bimage"]["name"]);
						move_uploaded_file($_FILES["bimage"]["tmp_name"], $target_file);
					//	$target_fileone = $target_dir . basename($_FILES["bcerer"]["name"]);
					//	move_uploaded_file($_FILES["bcerer"]["tmp_name"], $target_fileone);
    $suc=mysqli_query($con,"INSERT INTO `tbl_bus`(`btype`,`bname`,`bnumber`,`bdetails`,`bseat`,`bcoast`,`ac`,`bsleeper`,`bimage`,`district`) VALUES('$btype','$bname','$bnumber','$bdetails','$bseat','$bcoast','$bac','$bsleeper','$target_file','$dis')");
      //  header("location:index.php");
				//echo print_r($suc);
			
				header("location:viewbus.php");
 }
	?>
	
	
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox-details :: w3layouts</title>
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
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/oh-autoval-script.js"></script>
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
	?>	

	

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>ADMIN</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<!--<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
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
<div class="inner-block">
    
    	<!-- </div> -->  	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Add new bus 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								register new bus
							</div>
							<form class="com-mail" action="#" method="POST" enctype="multipart/form-data">
							<select name="btype" required="">
                    <option value="airbus">air bus</option>
                     <option value="volvo">Volvo</option>
										 </select><br><br>
                
                      
							                      
							                        
								<input type="text" name="bname" placeholder="vehicle name" class=" form-control av-name" av-message=" only name" required="">  
                                <input type="text" name="bnumber" placeholder="bus number" required="">  
								<input type="text"  name="bdetails" placeholder="details" class=" form-control av-name" av-message=" only name" required="">
								photo of vehicles
								<input type="file" name="bimage" class=" form-control av-image" av-message="only image" required="" > <br><br><br>
								<input type="text" name="bseat" placeholder="no of seats"  class=" form-control av-posnumber"  av-message="number" required="">  
							
							   <!--vehicle documentations-permit certificate
								 <input type="file" name="bcerer"><br>-->
								 facilities<br>
								 <input type="radio" name="ac" value="ac" required="" >ac<input type="radio" name="ac" value="nonac" required="" >non ac<br><br>
								 <input type="radio" name="sleeper" value="sleeper" required="">sleeper <input type="radio" name="sleeper" value="semi sleeper" required="">semi sleeper<input type="radio" name="sleeper" value="odinary" required="">ordinary<br><br>

								 <input type="text" name="coast" placeholder="cost per kilometer"  class=" form-control av-posnumber"  av-message="number" required="">  
								 <input type="text" name="dis" placeholder="avilable district" class=" form-control av-name" av-message="only character" required="">  <br>
								<input type="submit" name="submit" value="register">
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>

<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		       
		        
		        <!--<li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>-->
		        <li><a href="addpackage.php"><!--<i class="fa fa-envelope"></i>--><span>add packages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <!--<li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>-->
			            <li id="menu-academico-boletim" ><a href="addpackage.php">Add Package</a></li>
		             </ul>
		        </li>
		        
		         </li>-->
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


                      
						
