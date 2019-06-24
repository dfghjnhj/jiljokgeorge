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
    <div class="cols-grids panel-widget">
			<h2>BOOKING DETAILS</h2>
			<button type="button" class="btn btn-default"><a href=indibook.php><b>Booking</b></a></button>
		<button type="button" class="btn btn-default"><a href=indicus.php><b>customized booking</b></a></button><br><br><br>
			<style>
#myInput {
  /* background-image: url('../images/searchicon.png'); */
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 20%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 16px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 6px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


</style>
	<div>
<input type="text" id="myInput" placeholder="Search" title="Type in a name"></div>		
		<div class="chute chute-center text-center">
				
			
				
				
				</div>

				
                <?php
				include("database.php");
					$sql="SELECT * FROM `tbl_pic` where payment='succes'";
					$result=mysqli_query($con,$sql);
					
								?>		
										 
                <table id=myTable class="table" ui-jq="footable" ui-options='{
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
          
            <th>package name</th>
            <th>booked person</th>
            <th>accomadation</th>
            <th data-breakpoints="xs">phone</th>
            <th data-breakpoints="xs">payment</th>
			
           
          </tr>	
          <?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					
					$name=$row['package'];
					$person=$row['person'];
					$phone=$row['phone'];
					$payment=$row['payment'];	
                    $d1=$row['d1'];	
                    $d2=$row['d2'];	
                    $d3=$row['d3'];
                    $d4=$row['d4'];				
                    echo "<tr><td><centre>$name</centre></td><td><centre>$person</centre></td><td><centre>$d1,$d2,$d3,$d4</centre></td><td><centre>$phone</centre></td><td><centre>$payment</centre></td><td>";		
					
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
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
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

              
