<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+919961671081</div>
						<div class="social">
							<ul class="social_list">
								
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
							<div class="user_box_register user_box_link"><a href="logout.php">logout</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
    
       <div>
        
                <?php
                session_start();
                include("database.php");
                $user=$_SESSION['u_id'];
					$sql="SELECT * FROM `tbl_pb` where uid='$user'";
					$result=mysqli_query($con,$sql);
					
                                ?>
                                <div>
                                <?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					
					$p1=$row['pname'];
					$m1=$row['m1'];
					$m2=$row['m2'];
					$m3=$row['m3'];	
					$m4=$row['m4'];
                    $m5=$row['m5'];	
                    $payment=$row['payment'];	
                    		
                    				
					
                    ?>
                    	<table>
													<tbody>
													 
													<td>
																	 <?php echo $p1; ?>
																	</td>
																	<td>
                                                                        <?php echo $m1; ?>
                                                                        <?php echo $m2; ?>
                                                                        <?php echo $m3; ?>
                                                                        <?php echo $m4; ?>
                                                                        <?php echo $m5; ?>

																	</td>
																	<td>
																	<?php echo $payment; ?></td>
																	
																	
																	 
																	
																	
																	
										
		
		
															</tr>
														 
														</tbody>
																					 
		
												</table>
					 
					
					<?php
					}
				
					}
				?> 
						
							
                            

	


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>