<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
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
							<!--<div class="profile_details_left"><!--notifications of menu start -->
								<!--<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
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
		<div class="inner-block">
    <div class="product-block">
    	<div class="pro-head">
        <button type="button" class="btn btn-danger"><a href=viewpak.php><b>BACK</b></a></button>
    		<h2>PACKAGE INFORMATION</h2>
        </div>
        <?php
           $id=$_GET['id'];
        ?>
        <?php
		include("database.php");
			$sql="SELECT * FROM `tbl_dayactivity` where pid='$id'";
			$result=mysqli_query($con,$sql);
			
            ?>
            
            <?php
	$rowcount=1;
if($rowcount !=0 )

	{	$rc = 1;
		while($row=mysqli_fetch_array($result))
		{
			
			$a=$row['one'];
            $b=$row['oneac'];
            $c=$row['ho'];
            $d=$row['fromdate'];
            $e=$row['todate'];
            if($a!=null)
            {
                ?>
                	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							
					</div>
	    		<div class="produ-cost">
                    <h4>HOTEL:<br>
                    <?php echo $a; ?></h4>
                    <h4>ACCOMADATION:<?php echo $b; ?></h4>
                    <h4><?php echo $c; ?></h4>
                    <h4><?php echo $d; ?></h4>
                    <h4><?php echo $e; ?></h4>
                </div>
                
    		</div>
        </div>
        <?php
                    }
			?>
			<?php 
            $f=$row['two'];
            $g=$row['twoac'];
            $h=$row['th'];
            $i=$row['fr'];
            $j=$row['todatetwo'];
            if($f!=null)
            {
                ?>
                	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							
					</div>
	    		<div class="produ-cost">
	    			<h4><?php echo $f; ?></h4>
                    <h4><?php echo $g; ?></h4>
                    <h4><?php echo $h; ?></h4>
                    <h4><?php echo $i; ?></h4>
                    <h4><?php echo $j; ?></h4>
                </div>
                
    		</div>
        </div>
        <?php
                    }
			?>
			<?php 
            $k=$row['three'];
            $l=$row['threeac'];
            $m=$row['thrh'];
            $n=$row['threefrom'];
            $o=$row['threetwo'];
            if($k!=null)
            {
                ?>
                	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							
					</div>
	    		<div class="produ-cost">
	    			<h4><?php echo $k; ?></h4>
                    <h4><?php echo $l; ?></h4>
                    <h4><?php echo $m; ?></h4>
                    <h4><?php echo $n; ?></h4>
                    <h4><?php echo $o; ?></h4>
                </div>
                
    		</div>
        </div>
        <?php
                    }
			?>
			<?php 
            $p=$row['four'];
            $q=$row['fourac'];
            $r=$row['fh'];
            $s=$row['fourfrom'];
            $t=$row['fourto'];
            if($p!=null)
            {
                ?>
                	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/pro1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							
					</div>
	    		<div class="produ-cost">
	    			<h4><?php echo $p; ?></h4>
                    <h4><?php echo $q; ?></h4>
                    <h4><?php echo $r; ?></h4>
                    <h4><?php echo $s; ?></h4>
                    <h4><?php echo $t; ?></h4>
                </div>
                
    		</div>
        </div>
        <?php
                    }
			?>
																		
    
        <?php
			}
		
			}
		?> 
    	
    	
      <div class="clearfix"> </div>
    </div>
</div>
	                              
	                            
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                  
	                </table>
	               </div>   
               </div>
            </div>
          <div class="clearfix"> </div>     
   </div>
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

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
