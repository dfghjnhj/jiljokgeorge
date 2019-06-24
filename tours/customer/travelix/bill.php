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

		

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div style='margin-top:-100px' class="col" >

					<!-- Contact Form -->
				
					
					
                    <?php
                  
               
                include("database.php");
               
					$sql="SELECT * FROM `tbl_bill` where uid='$user'";
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
					$id=$row['uid'];
					$person=$row['person'];
					$from=$row['fromd'];
					$to=$row['tod'];
					$destination=$row['destination'];
					$bus=$row['bus'];	
                    $advance=$row['advance'];
                    $cost=$row['cost'];
                    $distance=$row['kilometer'];
                    $total=$row['total'];
                 
                 
                   
                    		
                    				
					
                    ?>
                    	<table>

													<tbody style='color:red;background-color:white;margin-top:1px;'>
													 
													
																
                                                                    <td id="dailyreport">
																																			  
                                                                       name: <?php echo $person; ?><br>
                                                                       from: <?php echo $from; ?><br>
                                                                       to: <?php echo $to; ?><br>
                                                                       destination: <?php echo $destination; ?><br>
                                                                       bus: <?php echo $bus; ?><br>
                                                                       advance: <?php echo $advance; ?><br>
                                                                       cost: <?php echo $cost; ?><br>
                                                                       distance: <?php echo $distance; ?><br>
																																			 total: <?php echo $total; ?>
																																			 <td>
																																			 <input type="button" onclick="dailyreport()" class="w3-btn w3-teal" value="Download"> 
																																			 </td>                              
																	
																																			
<script>
   
   function dailyreport() {
        var sTable = document.getElementById('dailyreport').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>TRIP BILL</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
   
</script>         
						

                                                                        
																	</td>
                                <td>
																	<?php
																
																$sqlone="select payment from `tbl_vehiclebooking` where uid='$id' and fromone='$from' and name='$person'";
                           $resultone=mysqli_query($con,$sqlone);
														$pay= mysqli_fetch_assoc($resultone)['payment'];
												
														if($pay!='fullpayment')
														{
														 ?>
														  	<button type="button" class="btn btn-warning" ><a href="web/payment.php?id=<?php echo $id; ?> && from=<?php echo $from; ?> && to=<?php echo $to; ?> && total=<?php echo $total; ?>">go to full payment</a></button>    
															<?php
														}

														else 
														{                    
															?>
                                FULL PAID
															<?php
														}
														?>                     
                             	</td>
                        
										
		
		
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