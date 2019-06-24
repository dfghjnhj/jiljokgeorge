<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->
<!DOCTYPE HTML>
<html>

<head>

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
<script src="js/scripts.js"></script>

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
                <!--inner block start here-->
                <div class="inner-block">
                    <!--<div class="inbox">
    	  <h2>Inbox Details</h2>
    	 <!--<div class="col-md-4 compose">   	 	
    	 	<!--<div class="mail-profile">
    	 		<!--<div class="mail-pic">
    	 			<a href="#"><img src="images/b3.png" alt=""></a>
    	 		</div>
    	 		<!--<div class="mailer-name"> 			
    	 				<h5><a href="#">Malorum</a></h5>  	 				
    	 			     <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>-->
                    <!--</div>-->
                    <!-- <div class="clearfix"> </div>-->
                    <!--</div>
    	 	<!--<div class="compose-bottom">
    	 		<ul>
    	 			<li><a class="hilate" href="#"><i class="fa fa-inbox"> </i>Inbox</a></li>
    	 			<li><a href="#"><i class="fa fa-envelope-o"> </i>Sent Mail</a></li>
    	 			<li><a href="#"><i class="fa fa-star-o"> </i>Important</a></li>
    	 			<li><a href="#"><i class="fa fa-pencil-square-o"> </i>Drafts</a></li>
    	 			<li><a href="#"><i class="fa fa-trash-o"> </i>Trash</a></li>
    	 		</ul>
    	 	</div>-->
                    <!-- </div> -->
                    <div class="col-md-8 compose-right">
                        <div class="inbox-details-default">
                            <div class="inbox-details-heading">
                                2 stage of registration
                                
                            
                            </div>
                            <div class="inbox-details-body">
                                <div class="alert alert-info">
                                    register daily programme
                                </div>
                                <div>
                                    <form class="com-mail" action="activity.php" method="POST">
                                    
                                    <?php
                                 $pakgeid=$_GET['id'];
                                 $pakgeseat=$_GET['seat'];
                                ?>
                                
                                        <select id="options" onchange="return Displaydays()" name="days">
                                            <option>select number of days</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>


                                        </select><br><br>
                                        <div id="one" style="display:none">
                                        <textarea rows="3" placeholder="accomadation" name="getid" hidden ><?php echo  $pakge; ?> </textarea>
                                        <textarea rows="3" placeholder="accomadation" name="getseat" hidden><?php echo  $pakgeseat; ?> </textarea>


                                            day one<input type="text" name="dayone-1" placeholder="programme description">
                                            <input type="text"  class=" form-control av-name" placeholder="accomodation including tour packages"  name="cco"> 
                                            <br><br>
                                            <!--<input type="date">-->
                                             customized hotel booking from
                                             <input type="date" placeholder="search by place" name="from" id="from" onchange="DateCheck()"> 
                                             to<input type="date" placeholder="search by place" name="to" id="to" onchange="DateCheck()"> <br>
                                             <div>
                                             <select name="country"  id="country" palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $cnme = $row['name'];
                                                    echo "<option value=>noo booking needed</option>";
                                                    echo "<option value='$cnme'>$cnme</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                        
                                        
                                        
                    </div>
                    <div class="input-field col s3">        
                   
                    </div>
               
       
                                          
                                        </div>
                                        <div id="two" style="display:none">
                                        <textarea rows="3" placeholder="accomadation" name="getid" hidden ><?php echo  $pakgeid; ?> </textarea>
                                            day one<input type="text" name="dayonetwo">
                                            <input type="text" placeholder="dayone accomadation" name="dayoneacco">
                                          
                                            <!--<input type="date">-->
                                            <div>
                                             customized hotel booking from
                                             <input type="date" placeholder="search by place" name="fr"  id="dc3" onchange="Checking()"> 
                                             to<input type="date" placeholder="search by place" name="t" id="dc4" onchange="Checking()"> <br>
                                             <select name="co"  id="co" palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotels</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $cn = $row['name'];
                                                    echo "<option value=>noo booking needed</option>";
                                                    echo "<option value='$cn'>$cn</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                        </div>
                                            <hr>
                                            <b>day two </b><input type="text" name="daytwotwo">
                                            <input type="text" placeholder="day two accomadation" name="daytwoacco">
                                            or<br><br>
                                            <!--<input type="date">-->
                                             customized hotel booking
                                             <input type="date" placeholder="search by place" name="fro" id="dc1" onchange="Check()"> 
                                             <input type="date" placeholder="search by place" name="too"  id="dc2" onchange="Check()"> <br>
                                             <select name="countr"  id="country"  palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $cnmes = $row['name'];
                                                    echo "<option value=>no booking needed</option>";
                                                    echo "<option value='$cnmes'>$cnmes</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                            
                                        </div>
                                        <div id="three" style="display:none">
                                        <textarea rows="3" placeholder="accomadation" name="getid" hidden ><?php echo  $pakgeid; ?> </textarea>
                                           <b> day one</b><input type="text" name="onedaythree">
                                            <input type="text" placeholder="dayone accomadation" name="onedaythreeacco">
                                            
                                            <!--<input type="date">-->
                                            customized hotel bookingfrom
                                             <input type="date" name="a"  id="dc5" onchange="ab()"> 
                                            to <input type="date" name="b"  id="dc6" onchange="ab()"> <br>
                                             <select name="c"  id="country" palceholder="select hotel" class="form-control">
                                           <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $namess= $row['name'];
                                                    echo "<option value=>no booking needed</option>";
                                                    echo "<option value='$namess'>$namess</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                
                                            day two <input type="text" name="twodaythree">
                                            <input type="text" placeholder="day two accomadation" name="twodaythreeacco">
                                            or<br><br>
                                            <!--<input type="date">-->
                                             customized hotel booking
                                             <input type="date" placeholder="search by place" name="d" id="dc7" onchange="abc()"> 
                                             <input type="date" placeholder="search by place" name="e" id="dc8" onchange="abc()"> <br>
                                             <select name="f"  id="country" palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotels</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $x= $row['name'];
                                                    echo "<option value=>no booking needed</option>";
                                                    echo "<option value='$x'>$x</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                           
                                            day three <input type="text"  placeholder="day three"  name="threedaythree">
                                           
                                            <input type="text" placeholder="day three accomadation" name="threedaythreeacco">
                                            or<br><br>
                                            <!--<input type="date">-->
                                             customized hotel booking
                                             <input type="date" placeholder="search by place" name="g" id="dc9" onchange="abcd()"> 
                                             <input type="date" placeholder="search by place" name="h" id="dc10" onchange="abcd()"> <br>
                                             <select name="i"  id="country" palceholder="Your Country" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select country</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $y = $row['name'];
                                                    echo "<option value=>no booking needed</option>";
                                                    echo "<option value='$y'>$y</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                        </div>
                                        <div id="four" style="display:none">
                                        <textarea rows="3" placeholder="accomadation" name="getid" hidden ><?php echo  $pakgeid; ?> </textarea>
                                            <b>day one</b><input type="text" name="odf">
                                            <input type="text" placeholder="dayone accomadation" name="odfa">
                                            <br><br>
                                            <!--<input type="date">-->
                                            customized hotel booking from
                                             <input type="date" placeholder="search by place" name="j" id="dc11" onchange="xy()"> 
                                             to<input type="date" placeholder="search by place" name="k" id="dc12" onchange="xy()"> <br>
                                             <select name="l"  id="country" palceholder=" selecthotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                echo "<option value=>no booking needed</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $jiljo = $row['name'];
                                                   
                                                    echo "<option value='$jiljo'>$jiljo</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                            <b>day two</b> <input type="text"  name="tdf">
                                            <input type="text" placeholder="day two accomadation" name="tdfa">
                                           
                                            <!--<input type="date">-->
                                            customized hotel booking from
                                             <input type="date" placeholder="search by place" name="m"  id="dc13" onchange="xyz()" > 
                                             to<input type="date" placeholder="search by place" name="n"  id="dc14" onchange="xyz()"> <br>
                                             <select name="o"  id="country" palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                echo "<option value=>no booking needed</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $jiljokg = $row['name'];
                                                  
                                                    echo "<option value='$jiljokg'>$jiljokg</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                            
                                            <b>day three</b> <input type="text"  name="thdf" >
                                            <input type="text" placeholder="day three accomadation"  name="thdfa">
                                            <br><br>
                                            <!--<input type="date">-->
                                            customized hotel booking from
                                             <input type="date" placeholder="search by place" name="p"  id="dc15" onchange="xya()"> 
                                            to <input type="date" placeholder="search by place" name="q"  id="dc16" onchange="xya()"> <br>
                                             <select name="r"  id="country" palceholder=" select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                echo "<option value=>no booking needed</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $jiljokgeorge = $row['name'];
                                        
                                                    echo "<option value='$jiljokgeorge'>$jiljokgeorge</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                           
                                            <b>day four</b><input type="text"  name="fdf">
                                            <input type="text" placeholder="day four accomadation" name="fdfa">
                                          
                                            <!--<input type="date">-->
                                            customized hotel booking from
                                             <input type="date" placeholder="search by place" name="s"  id="dc17" onchange="xyb()"> 
                                            to <input type="date" placeholder="search by place" name="tt"  id="d18" onchange="xyb()"> <br>
                                             <select name="u"  id="country" palceholder="select hotel" class="form-control">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select name from `hoteldetails` where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select hotel</option>";
                                                echo "<option value=>no booking needed</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $alan = $row['name'];
                                                  
                                                    echo "<option value='$alan'>$alan</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select> 
                                            
                                        </div>
                                        <input type="submit" name="submit" value="submit">
                                </div>
                        
                                
                            </div>


                            <!--<div id="three">
                      day one<input type="text">
                     day two <input type="text">
                     day three<input type="text">
                      </div>-->
                            <script>
                                function Displaydays() {
                                    var x = document.getElementById("one");

                                    var y = document.getElementById("two");
                                    var z = document.getElementById("three");
                                    var p = document.getElementById("four");

                                    var u = document.getElementById("options").value;
                                    console.log(u);

                                    if (u == '1') {
                                        y.style.display = "none";
                                        x.style.display = "block";
                                        z.style.display = "none";
                                        p.style.display = "none";
                                    }
                                    if (u == '2') {
                                        x.style.display = "none";
                                        y.style.display = "block";
                                        z.style.display = "none";
                                        p.style.display = "none";
                                    }
                                    if (u == '3') {
                                        x.style.display = "none";
                                        y.style.display = "none";
                                        z.style.display = "block";
                                        p.style.display = "none";
                                    }
                                    if (u == '4') {
                                        x.style.display = "none";
                                        y.style.display = "none";
                                        z.style.display = "none";
                                        p.style.display = "block";
                                    }
                                }
                            </script>
               
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
            <p>© 2016 Shoppy. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                    target="_blank">W3layouts</a> </p>
        </div>
        <!--COPY rights end here-->
    </div>

    <!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span
                    id="logo"></span>
                <!--<img id="logo" src="" alt="Logo"/>-->
            </a> </div>
        <div class="menu">
            <ul id="menu">
                <li id="menu-home"><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
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

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative"
                    });
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
                 <script>
                          function Check()
                    {
                      var StartDate= document.getElementById('dc1').value;
                      var EndDate= document.getElementById('dc2').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc2').value="";
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
                    $('#dc1').attr('min',minDate);
                    $('#dc2').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function Checking()
                    {
                      var StartDate= document.getElementById('dc3').value;
                      var EndDate= document.getElementById('dc4').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc4').value="";
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
                    $('#dc3').attr('min',minDate);
                    $('#dc4').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function ab()
                    {
                      var StartDate= document.getElementById('dc5').value;
                      var EndDate= document.getElementById('dc6').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc6').value="";
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
                    $('#dc5').attr('min',minDate);
                    $('#dc6').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function abc()
                    {
                      var StartDate= document.getElementById('dc7').value;
                      var EndDate= document.getElementById('dc8').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc8').value="";
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
                    $('#dc7').attr('min',minDate);
                    $('#dc8').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function abcd()
                    {
                      var StartDate= document.getElementById('dc9').value;
                      var EndDate= document.getElementById('dc10').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc10').value="";
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
                    $('#dc9').attr('min',minDate);
                    $('#dc10').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function xy()
                    {
                      var StartDate= document.getElementById('dc11').value;
                      var EndDate= document.getElementById('dc12').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc12').value="";
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
                    $('#dc11').attr('min',minDate);
                    $('#dc12').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function xyz()
                    {
                      var StartDate= document.getElementById('dc13').value;
                      var EndDate= document.getElementById('dc14').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc14').value="";
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
                    $('#dc13').attr('min',minDate);
                    $('#dc14').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function xya()
                    {
                      var StartDate= document.getElementById('dc15').value;
                      var EndDate= document.getElementById('dc16').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc16').value="";
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
                    $('#dc15').attr('min',minDate);
                    $('#dc16').attr('min',minDate);
                  });
                });

                </script>
                <script>
                          function xyb()
                    {
                      var StartDate= document.getElementById('dc17').value;
                      var EndDate= document.getElementById('dc18').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('dc18').value="";
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
                    $('#dc17').attr('min',minDate);
                    $('#dc18').attr('min',minDate);
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