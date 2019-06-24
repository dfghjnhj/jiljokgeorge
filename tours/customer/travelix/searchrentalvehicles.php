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
<script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
<?php
session_start();

if(!isset($_SESSION['u_id']))
header("location:../../index.php");
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
        <form action="rental.php" method="post">
		
									
									<div class="search_item">
										<div>from
										<input type="date" name="fd" id="from" onchange="DateCheck()" required=""><br><br>
									
									
										to
										<input type="date" name="tod" id="to" onchange="DateCheck()"  required=""><br><br>
										district<br>
                                        <select name="dis"  required="">
																			
										 <option value="kasargod">kasargod</option>
										 <option value="kannur">kannur</option>
										 <option value="kozikode">kozhikode</option>
										 <option value="wayanad">wayanad</option>
										 <option value="malapuram">malapuram</option>
										 <option value="trissur">trissur</option>
										 <option value="palakad">palakad</option>
										 <option value="eranakulam">eranakulam</option>
										 <option value="idukki">idukki</option>
										 <option value="kottayam">kottayam</option>
										 <option value="alapuza">alapuza</option>
										 <option value="pathanamthitta">pathanamthitta</option>
										 <option value="kollam">kollam</option>
										 <option value="trivandrum">trivandrum</option>
									</select>
                                        <button class="button search_button">check avilability<span></span><span></span><span></span></button>
									</div>
									
										
								
									
									</div>
									
										
									</div>
									
								</form>

	


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
               

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>