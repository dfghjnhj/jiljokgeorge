<!DOCTYPE html>
<html lang="en">
<head>
<title>Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
<head>
        <title>DIV Font</title>

        <style>
            .my_text
            {
                font-family:    Arial, Helvetica, sans-serif;
                font-size:      100px;
                font-weight:    bold;
            }
        </style>
    </head>
</head>

<body>
<?php
								 $id=$_GET['id'];
								 $name=$_GET['name'];
                                ?>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">Contact no:9961671081</div>
						<div class="social">
							
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="index.php">HOME</a></div>
							<div class="user_box_register user_box_link"><a href="logout.php">LOGOUT</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>


		<!-- Main Navigation -->

		

	<!-- Home -->

	
	
	</div>




				<div class="pbars_accordions">
					<div class="row">
						<div class="col-lg-12">
						<button type="button" class="btn btn-default" >we offer tour packages with accomadation and also provide<br> customized hotel bookings,
							booked tourist can use our accomadation ,if anybody<br> want extra room for accomadation  ,they can book hotel rooms <br>
							package cost is fixed ,if you  booking extra<br> rooms it cost will pay to hotels<br></button><br>
								<b><i>Booking steps<br>
							
							1.Book the tour package<br>
							2.check the daily programme and book hotels if needed(hotel booking completly managed by hotels<br> including room avilability,cost,cancelation,we just connecting our client with hotels)<br>
							3.if you are interested to book rooms check avilability and book rooms(incase rooms are not avilable<br>you can use our normal accomadation with tour package)<br></i></b>
							<div class="elements_title">Book tour frist <button type="button" class="btn btn-default" ><a href="cindividualbook.php?name=<?php echo $name; ?> && id=<?php echo $id; ?>">BOOK</a></button> </div>
					<div class="row pbars_accordions_container">

						<!-- Progress Bars & Accordions -->

						<div class="col-lg-7">
							
							
                                
								<?php
		include("database.php");
			$sql="SELECT * FROM `tbl_dayactivity` where pid='$id'";
			$result=mysqli_query($con,$sql);
			
			?>
						<?php
							$rowcount=1;
  if($rowcount !=0 )

	{	
      
		while($row=mysqli_fetch_array($result))
		{
			$one=$row['one'];
            $acco=$row['oneac'];
					$hotel=$row['ho'];
					$from=$row['fromdate'];
                    $to=$row['todate']; 

                    if($one!=null)
                    {
                        ?>
                    <div class="elements_accordions">

                    <div class="accordion_container">
                        <div class="accordion d-flex flex-row align-items-center active"><div>1 st day</div></div>
                        <div class="accordion_panel" >
                    
                            ACTIVITIES :<b><i><?php echo $one; ?><br></b></i>
                    
                    
                        ACCOMADATION WITH PACKAGES :<b><u><i><?php echo $acco; ?></i></b></u></p>
                        
                    
                        CUSTOMIZED HOTEL ACCOMADATION 
                        <p><b><i><?php echo $from; ?><?php echo " ----";?><?php echo $to; ?><?php echo " HOTEL-------";?><?php echo $hotel; ?></i></b></p>
                        
                        <button type="button" class="btn btn-default" ><a href="hoteldetail2.php?hotel=<?php echo $hotel; ?> && from=<?php echo $from; ?> && to=<?php echo $to; ?>"><b>BOOKING</b></a></button>
                    
                    </div>
                    <?php
                    }
                    ?>
				     <?php
					$two=$row['two'];
					$twoc=$row['twoac'];
					$twohotel=$row['th'];
					$from1=$row['fr'];
                    $to1=$row['todatetwo'];
                    if($two!=null)
                    {
                        ?>
									<div class="accordion_container">
                                    <div class="accordion d-flex flex-row align-items-center"><div>2 nd day</div></div>
                                    <div class="accordion_panel">
                                
                                    ACTIVITIES  :<b><i><?php echo $two; ?><br></b></i>
                                    
                                
                                    ACCOMADATION WITH PACKAGES :<b><u><i><?php echo $twoc; ?></i></b></u></p>
                                
                                    CUSTOMIZED HOTEL ACCOMADATION 
                                    <p><b><i><?php echo $from1; ?><?php echo " ----";?><?php echo $to1; ?><?php echo " HOTEL-------";?><?php echo $twohotel; ?></i></b></p>
                            
                                    <button type="button" class="btn btn-warning"><a href="hoteldetails3.php?hotel=<?php echo $twohotel; ?> && from=<?php echo $from1; ?> && to=<?php echo $to1; ?>"><b>BOOKING</b></a></button>
                                    </div>
                                    <?php
                    }
                    ?>
                                   <?php 
					$three=$row['three'];
					$threec=$row['threeac'];
					$from2=$row['threefrom'];
					$two2=$row['threetwo'];
                    $threehotel=$row['thrh'];
                    if($three!=null)
                    {
                        ?>
                    	<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>3 rd day</div></div>
										<div class="accordion_panel">
									
										ACTIVITIES  :<b><i><?php echo $three; ?><br></b></i>
									
										ACCOMADATION WITH PACKAGES :<b><u><i><?php echo $threec; ?></i></b></u></p>
									
										CUSTOMIZED HOTEL ACCOMADATION 
										<p><b><i><?php echo $from2; ?><?php echo " to";?><?php echo $two2; ?><?php echo " booking for";?><?php echo $threehotel; ?></i></b></p>
								
										<button type="button" class="btn btn-danger"><a href="hoteldetails4.php?hotel=<?php echo $threehotel; ?> && from=<?php echo $from2; ?> && to=<?php echo $two2; ?>"><b>BOOKING</b></a></button>
										</div>
                                        <?php
                    }
                    ?>
                                            <?php
					$four=$row['four'];
					$fourc=$row['fourac'];
					$fourhotel=$row['fh'];
					$from3=$row['fourfrom'];
                    $to3=$row['fourto'];
                    if($four!=null)
                    {
                        ?>
                    	<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>4 rh day</div></div>
										<div class="accordion_panel">
									
										ACTIVITIES  :<b><i><?php echo $four; ?><br></b></i>
									
									ACCOMADATION WITH PACKAGES :<b><u><i><?php echo $fourc; ?></i></b></u></p>
									
										CUSTOMIZED HOTEL ACCOMADATION 
										<p><b><i><?php echo $from3; ?><?php echo " to";?><?php echo $to3; ?><?php echo " booking for";?><?php echo $fourhotel; ?></i></b></p>
								
										<button type="button" class="btn"><a href="hoteldetails5.php?hotel=<?php echo $fourhotel; ?> && from=<?php echo $from3; ?> && to=<?php echo $to3; ?> "><b>BOOKING</b></a></button>
										</div>
										<?php
                    }
                    ?>
																	
					<?php
			}
		
			}
		?> 	
			
				

					<!--<div class="icon_boxes">
						<div class="row">
							<div class="col">
								<div class="elements_title">Icon Boxes</div>
							</div>
						</div>

						<!--<div class="row icon_boxes_container">

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/icon_1.png" alt=""></div>
								</div>
								<h3>Cruises</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>-->

						<!--	<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/icon_2.png" alt=""></div>
								</div>
								<h3>Flights</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>

							<div class="col-lg-4 icon_box text-left d-flex flex-column align-items-start justify-content-start">
								<div class="icon_container d-flex flex-column justify-content-end">
									<div><img src="images/icon_3.png" alt=""></div>
								</div>
								<h3>Activities</h3>
								<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
							</div>-->

						</div>
					</div>

				</div>
			</div>
		</div>	
	</div>

	<!-- Footer -->

	<!--<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
			<!--	<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
						<!--	<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
						<!--	<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<!--<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
			<!--	<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">fashion</a></li>
								<li class="tag_item"><a href="#">music</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

<!--	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				<!--	</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.html">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>-->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/jquery-circle-progress-1.2.2/circle-progress.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/elements_custom.js"></script>

</body>

</html>