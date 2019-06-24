<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->
<!DOCTYPE HTML>
<html>
<head>
<?php
 include("database.php");
 
 if(isset($_POST["submit"]))
 {
	$ptype=$_POST["type"];
    $pname=$_POST["pname"];
	$pdesi=$_POST["pdesination"];
    $pseat=$_POST["pseat"];
    $pcost=$_POST["pcost"];
    $pduration=$_POST["pduration"];
		$pdate=$_POST["pdate"];
		$ptime=$_POST["ptime"];
		$pstart=$_POST["pstart"];
		$bp1=$_POST["bp1"];
		$bp2=$_POST["bp2"];
		$bp3=$_POST["bp3"];
		$pdetails=$_POST["details"];
		$faci=$_POST["faci"];
		//$pfacilities=$_POST["pfacilities"];
		$pmore=$_POST["message"];
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $suc=mysqli_query($con,"INSERT INTO `tbn_addpak`(`ptype`,`pname`,`pdesination`,`seat`,`cost`,`duration`,`date`,`time`,`sp`,`details`,`facilities`,`more`,`pimage`) VALUES('$ptype','$pname','$pdesi','$pseat','$pcost','$pduration','$pdate','$ptime','$pstart','$pdetails','$faci','$pmore','$target_file')");
      //  header("location:index.php");
				//echo print_r($suc);
				$pakid=mysqli_insert_id($con);
				header("location:addactivity.php?id=$pakid && seat=$pseat");
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/oh-autoval-script.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
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
   
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Add new packages
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								register new packages
							</div>
							<div class="alert alert-info">
							 	Individual package-cost per individual<br>
							 Family package-5 family members,cost per each family</b>
	               </div>
							<form class="com-mail" action="#" method="POST" enctype="multipart/form-data">
							                      
							                         <select name="type"  required="">
                    <option value="individual">Individual</option>
                     <option value="family">family </option>
										 
                      
                       </select><br><br>
								<input type="text" name="pname" class=" form-control av-name" av-message="Minimum 3 characters and alphabets only"  placeholder="package name" required="">  
								<input type="text"  name="pdesination"  class=" form-control av-name" av-message="Minimum 3 characters and alphabets only"  placeholder="package desination" required="">
								<input type="text"  name="pseat"placeholder="avilable seat/no of family allowed" class=" form-control av-posnumber"  av-message="number"  required="">
								<input type="text"  name="pcost" placeholder="cost per individual/family" class=" form-control av-posnumber"  required=""><br>
                 duration of trip<br>
								<select name="pduration"  required="">
                    <option value="1">1</option>
										 <option value="2">2</option>
										 <option value="3">3</option>
										 <option value="4">4</option>
										 </select><br><br>
								<!-- <input type="text"  name="pduration" placeholder="duration"  class=" form-control av-posnumber"  av-message="number"  required=""> -->
								date of journey<br><input type="date" name="pdate" id="from" onchange="DateCheck()" required=""><br><br>
								time of journey <input type="text"  name="ptime" required="">
				
								<input type="text"   name="pstart" placeholder="depature point of tour" required="">
								<!-- <input type="text"   name="bp1" class=" form-control av-name" av-message="characters  only" placeholder="boarding point one">
								<input type="text"   name="bp2" class=" form-control av-name" av-message="characters  only" placeholder="boarding point two">
								<input type="text"   name="bp3" class=" form-control av-name" av-message="characters  only" placeholder="boarding point three"> -->
								<input type="text" name="details" class=" form-control av-name" av-message="alphabets only" placeholder="details" required="">  
								<input type="text" name="faci" class=" form-control av-name" av-message="alphabets only" placeholder="facilities offering" required="">  
								<textarea rows="2" name="message" class=" form-control av-name" av-message="alphabets only" placeholder="more information" required=""></textarea>
							<!--	<input type="text"   name="pdetails" placeholder="details of plan" required="">
								 <input type="text"  name="pfacilities" placeholder="facilities" required="">-->
								 <!--	<textarea rows="3" name="pdetails" placeholder="details of plan" required="">  -->
								<!--<textarea rows="5"  name="pother" placeholder="more details">-->
							   <!--<textarea rows="6"  name="Message :" placeholder="more information"> </textarea>
								<input type="file" name="image">
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"> </i> Photo-->
										<input type="file" name="image" class=" form-control av-image" av-message="only image" required="">
									</div>
								</div>
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
		  	<div class</span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <!--<li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Grids</a></li>
		            <li><a href="portlet.html">Portlets</a></li>		            
		          </ul>
		        </li>-->
		        <!--<li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		            <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>
		        </li>-->
		          <!--<li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li>-->
		        
		        <!--<li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>-->
		        <li><a href="addpackage.php"><!--<i class="fa fa-envelope"></i>--><span>add packages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <!--<li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>-->
			            <li id="menu-academico-boletim" ><a href="addpackage.php">Add Package</a></li>
									<li id="menu-academico-boletim" ><a href="viewpackage.php">View Package</a></li>
		             </ul>
		        </li>
		         <!--<li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li>-->
		         <!--<li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
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
<script>
                          function DateCheck()
                    {
                      var StartDate= document.getElementById('from').value;
                      var EndDate= document.getElementById('to').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('to').value="";
                        return false;
                        }
                    }
                    </script>
                         <script>
                        $(function() {
                  $(document).ready(function () {

                  var todaysDate = new Date(); // Gets today's date
                    var year = todaysDate.getFullYear();                        // YYYY
                    var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);  // MM
                    var day = ("0" + todaysDate.getDate()).slice(-2);           // DD
                    var minDate = (year +"-"+ month +"-"+ day); // Results in "YYYY-MM-DD" for today's date 
                    $('#from').attr('min',minDate);
                    $('#to').attr('min',minDate);
                  });
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


                      
						
