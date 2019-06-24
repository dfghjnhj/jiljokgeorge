<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>
									
<?php
  session_start(); 	
  $user=$_SESSION['u_id'];
  ?>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">contact no:9961671081</div>
				
						<div class="user_box ml-auto">
						<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
			
							<!--<div class="user_box_login user_box_link"><a href="#">login</a></div>
							<div class="user_box_register user_box_link"><a href="#">register</a></div>-->
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<!--<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.html">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">offers</a></li>
								<li class="main_nav_item"><a href="blog.html">news</a></li>
								<li class="main_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<!--<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div style='margin-top:-100px' class="col">

					<!-- Contact Form -->
				
					
					
                    <?php
                    echo "BUS BOOKING";
               
                include("database.php");
               
					$sql="SELECT * FROM `tbl_vehiclebooking` where uid='$user' and payment='succes' and status='0'";
					$result=mysqli_query($con,$sql);
					
                                ?>
                                
                                <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;

  
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
	
}

</style>

</head>

                                <?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					$idb=$row['vid'];
					$bid=$row['bid'];
					$sqlone="SELECT * FROM `tbl_bus` where bid='$bid'";
					$resultone=mysqli_query($con,$sqlone);
					$d=mysqli_fetch_assoc($resultone);
					
					$name=$row['name'];
					$from=$row['fromone'];
					$to=$row['toone'];
					$desi=$row['destination'];	
					$root=$row['root'];
                   
                    		
                    				
					
                    ?>
                    	<table>

													<tbody style='color:red;background-color:white;margin-top:1px;'>
													 
													<td  >
																	
																	</td>
																
                                                                    <td width="20%">
                                                                        <?php echo $name; ?>
                                                                        
																	</td>
																	<td width="20%">
                                                                        <img src="../../admins/<?php echo $d['bimage']; ?>" width="100" height="100">
                                                                        
																	</td>
                                                                    <td width="20%">
																	<?php echo $from; ?></td>
																	<td width="20%">
																	<?php echo $to; ?></td>
																	<td width="20%">
																	<?php echo $desi; ?></td>
																	<td width="20%">
																	<?php echo $root; ?></td>
																	<td width="20%">
																	<button><a href="cancelbus.php?idb=<?php echo $idb; ?> && from=<?php echo $from; ?>">cancel</button>
																	 
															
																	
																	
										
		
		
															</tr>
														 
														</tbody>
																					 
		
												</table>
					 
					
					<?php
					}
				
					}
				?> 
						
                        <?php
                    echo "TRAVELER BOOKING";
               
                include("database.php");
              
					$sql="SELECT * FROM `tbl_travelerbook` where uid='$user' and payment='succes' and status='0'";
					$result=mysqli_query($con,$sql);
					
                                ?>
                                
                                <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;

  
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
	
}

</style>

</head>

                                <?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					$id=$row['tbid'];
					$tid=$row['tid'];
					$sqltwo="SELECT * FROM `tbl_addtraveler` where tid='$tid'";
					$resulttwo=mysqli_query($con,$sqltwo);
					$t=mysqli_fetch_assoc($resulttwo);
					$name=$row['name'];
					$from=$row['fromone'];
					$to=$row['toone'];
					$desi=$row['destination'];	
					$root=$row['root'];
                   
                    		
                    				
					
                    ?>
                    	<table>

													<tbody style='color:red;background-color:white;margin-top:1px;'>
													 
													<td  >
																	
																	</td>
																	
                                                                    <td width="20%">
																																				<?php echo $name; ?>
																																			
                                                                        
																	</td>
																	<td width="20%">
                                                                        <img src="../../admins/<?php echo $t['timage']; ?>" width="100" height="100">
                                                                        
																	</td>
                                                                    <td width="20%">
																	<?php echo $from; ?></td>
																	<td width="20%">
																	<?php echo $to; ?></td>
																	<td width="20%">
																	<?php echo $desi; ?></td>
																	<td width="20%">
																	<?php echo $root; ?></td>
																	<td width="20%">
																<button><a href="cancel.php?id=<?php echo $id; ?> && from<?php echo $from; ?>">cancel</button>
																	<td width="20%">
														
																	 
																	
																	
																	
										
		
		
															</tr>
														 
														</tbody>
																	 
		
												</table>
					 
					
					<?php
					}
				
					}
				?> 
						

						
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<!--<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<!--<div class="about_image">
						<img src="images/man.png" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<!--<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
						</div>
						<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

			

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
		
	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<!-- Footer -->


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

</html>