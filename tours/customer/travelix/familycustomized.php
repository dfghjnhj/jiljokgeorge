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
<?php
	session_start();
    if(!isset($_SESSION['u_id']))
header("location:../../index.php");
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
						<div class="phone">9961671081</div>
						<div class="social">
						
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
                            <div class="user_box_register user_box_link"><a href="logout.php">log out</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		
	</header>

	

	<!-- Home -->

	

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->

		<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">

							<!-- Search Tabs -->

							<div class="search_tabs_container">
								<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
								</div>		
							</div>

							<!-- Search Panel -->
							<h6>tables</h6><br><br>
							<button type="button"  class="btn btn-default" ><a href="familytourbooking.php">BOOKING</a></button>	<button type="button"  class="btn btn-default" ><a href="familycustomized.php">BOOKING WITH CUSTOMIZED ACCOMADATION</a></button><br><br>
							<h6><b> <i> MY FAMILY TOUR BOOKING</i><b></h6>
							<table style='color:red;background-color:white;margin-top:1px,boarder:5px;'>
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

							<tr>
                     
                    <?php
                  
               
                  include("database.php");
               
                  $sql="SELECT * FROM `tbl_fcp` where uid='$user' and status='0'";
                  $result=mysqli_query($con,$sql);
                  
                              ?>
																				
					  <tr>
		            <th data-breakpoints="xs" width="20%">Tour package name</th>
		            <th data-breakpoints="xs" width="20%">Image</th>
                   <th data-breakpoints="xs" width="20%">Traveling family members</th> 	
                   <th data-breakpoints="xs" width="20%">date of journey</th>
                   <th data-breakpoints="xs" width="20%">Booked hotels</th>
		            <th data-breakpoints="xs" width="20%">payment status</th>
                   <th data-breakpoints="xs" width="20%">booking cancelation</th> 	
                   
                  
                   
		       
          
</tr>
               
<?php
			$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					$bookid=$row['pbid'];
					$id=$row['pid'];
					$sqlone="SELECT * FROM `tbn_addpak` where pid='$id'";
					$resultone=mysqli_query($con,$sqlone);
					$d=mysqli_fetch_assoc($resultone);
				$from=$d['date']; 
					$p1=$row['pname'];
					$m1=$row['m1'];
					$m2=$row['m2'];
					$m3=$row['m3'];	
					$m4=$row['m4'];
                    $m5=$row['m5'];	
                    $d1=$row['d1'];	
                    $d2=$row['d2'];	
                    $d3=$row['d3'];	
                    $d4=$row['d4'];	
                 
                    $payment=$row['payment'];	
                    		
										 			
					
                    ?>
						<tbody>
						 <tr>
						 <td width="20%">
                         <?php echo $p1; ?>
                                                                        
              </td>
                                                                 
																	<td width="20%">
                                                                    <img src="../../admins/<?php echo $d['pimage']; ?>" width="200" height="100">
                                                                        
                                                                    </td>
                                                                    <td width="20%">
                                                                        <?php echo $m1; ?>,
                                                                        <?php echo $m2; ?>,
                                                                        <?php echo $m3; ?>,
                                                                        <?php echo $m4; ?>,
                                                                        <?php echo $m5; ?>

                                                                    </td>
                                                                    <td width="20%">
																	<?php echo $from; ?></td>
                                                                    <td width="20%">
                                                                        <?php echo $d1; ?><br>
                                                                        <?php echo $d2; ?><br>
                                                                        <?php echo $d3; ?><br>
                                                                        <?php echo $d4; ?><br>
                                                                      
																	</td>
                                                                   
                                                                   
																	<td width="20%">
																	<?php echo $payment; ?></td>
																	
																	
																	<td width="20%">
                                                                        cancelation only possible before two date of departure
                                                                    <button><a href="familyccancel.php?id=<?php echo $bookid; ?> && from=<?php echo $from; ?>">cancel booking</button></td>
																	 
															
																	
																	
										
																																																				
													</tr>
						</tbody>
							

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

		

						<!-- Offers Item -->

						
	<!-- Footer -->

	
	<!-- Copyright -->

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
						

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
</body>

</html>