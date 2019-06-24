<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
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
													<p><a href="logout.php"><i class="fa fa-cog"></i>Log out</a></p>
											
												
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
    <div class="cols-grids panel-widget">
			<h2>USERS LIST</h2>
			
		<div class="chute chute-center text-center">
				
			
				
				
				</div>

				<?php
				include("database.php");
					$sql="SELECT * FROM `tbn_addpak` where status='0'";
					$result=mysqli_query($con,$sql);
					
								?>
									 
                                     <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <tr>
          
						<th>name</th>
						<th>type</th>
						<th>place</th>
						<th>cost </th>
						<th>image </th>
            <th data-breakpoints="xs">date of depature</th>
            <th data-breakpoints="xs">place of depature</th>
						<th data-breakpoints="xs">More information</th>
						
            <th data-breakpoints="xs">Remove package</th>
            
			
           
          </tr>	


				
										<?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					$id=$row['pid'];
					$name=$row['pname'];
					$type=$row['ptype'];
					$desi=$row['pdesination'];
					$seat=$row['seat'];	
					$coast=$row['cost'];
                    $du=$row['duration'];
                    $date=$row['date'];			
										$sp=$row['sp'];		
										$im=$row['pimage'];		
										echo "<tr><td><centre>$name</centre></td><td><centre>$type</centre></td><td><centre>$desi</centre></td><td><centre>$coast</centre></td><td><centre><img src=$im width=100 height=100></centre></td><td><centre>$date</centre></td><td><centre>$sp</centre></td><td><centre><button type='button'><a href='more.php?id=$id'><b>More details</b></a></button>
										</td></centre><td><centre><button type='button'><a href='remove.php?id=$id'><b>Remove package</b></a></button></td></centre></td><td>";		
					
					?>	
					
					
					
					
				
							
										 
					<table>
																	
																	 
																	
																	
																	
										
		
		
															</tr>
														 
														</tbody>
																					 
		
												</table>
					 
			<?php
					}
				
					}
				?> 
											 
												
		
												</table>
			
						

				</div>
			
		
				
				</div>
		  </div>
	 </div>	
	 
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
		  			  
							<div class="menu">
								<ul id="menu" >
									<li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
								 
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

</body>
</html>

              
