
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>


<?php
if(isset($_POST['pay']))
{
	session_start();
	include("database.php");
	$user=$_SESSION['u_id'];
    $idss=$_POST['value'];
    $name=$_POST['name'];
     $from=$_POST['date'];
     $to=$_POST['todate'];
     $destination=$_POST['destination'];
     
     $arrival=$_POST['arrival'];
     $root=$_POST['root'];
     $mphone=$_POST['phone'];
	   $pakid=$_POST['value'];

    $suc=mysqli_query($con,"INSERT INTO `tbl_travelerbook`(`tid`,`uid`,`fromone`,`toone`,`name`,`destination`,`root`,`arrival`,`phone`,`payment`,`status`,`advance`) VALUES('$idss','$user','$from','$to','$name','$destination','$root','$arrival','$mphone','not complete','0','0')");
}

if(isset($_POST['submit']))
{	
	include("database.php");
	$phone =$_POST['phone'];
    $ba_name =$_POST['bank'];
    $c_no =$_POST['c_no'];
    $month =$_POST['month'];
    $year=$_POST['year'];
    $c_name=$_POST['c_name'];
    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];

	
	$sql="select * from `tbl_bank` where ba_name='$ba_name' and c_no='$c_no' and month='$month' and year='$year' and c_name='$c_name' and cvv='$cvv'"; 

	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount!=0)
	  {
		
	while($row=mysqli_fetch_array($result))
		{
		$amount1=$row['amount'];
		
		if($amount1<$amount)
		{
			echo $amount;
			echo "<script>alert('not suffient balance!;');window.location.href='index3.php';</script>";
		}
else
	      {
		$amt=$amount1-$amount;
		$sql2="update tbl_bank set amount='$amt' where c_no='$c_no'";
		$res2=mysqli_query($con,$sql2);
		
       $sql3="update tbl_travelerbook set payment='succes',advance='$amount' where phone='$phone'";
		 $res3=mysqli_query($con,$sql3);
	
		
	//	$_SESSION['ENABLE_MENU']=1;
		//$sql1="INSERT INTO `alog`(`email`) VALUES ('$email')";
	//	$res1=mysql_query($sql1,$con);
		
  echo "<script>alert('succeesfuly Booked!');window.location.href='../boookedtraveler.php';</script>";
 
		}
		}
}
	else
	{
	echo "<script>alert(' Paiment not succeesfuly!');window.location.href='index3.php';</script>";
	}
}			
	?>
	

	<div class="main">
	<button type="button"><a href="../index.php"><b><-BACK TO HOME</b></a></button></div>
	
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
							
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											
											<form action="#" method="post">
											<textarea rows="2" name="phone" hidden><?php echo $mphone; ?></textarea>
											<textarea rows="2" name="id" hidden><?php echo $pakid; ?></textarea>	
											<div class="tab-for">	
											<h5>SELECT BANK</h5>
											<select name="bank" required="">
                    <option value="sib">sib</option>
                     <option value="canara">canara</option>
					 <option value="fedaral">fedaral</option>
					 <option value="canara">icici</option>
										 </select><div>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="c_name" pattern="^[a-zA-Z]+$" required="">
													<h5>CARD NUMBER</h5>													
														<input type="text" name="c_no" class="input-text" pattern="^\d{12}$"  placeholder="enter 12 digit number" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																<h5>MONTH</h5>	
																<select name="month"  required="">
                              <option value="jan">Jan</option>
						<option value="feb">Feb</option>   
						<option value="mar">Mar</option>   
						<option value="apr">Apr</option>   
						<option value="may">May</option>   
						<option value="june">June</option>  
						<option value="july">July</option>
						<option value="aug">Aug</option>
                        <option value="sep">Sep</option>
                        <option value="oct">Oct</option>
                        <option value="nov">nov</option>
                        <option value="dec">Dec</option>		
  
</select>
																</li>
																<li>
																<h5>YEAR</h5>	
																<select name="year" required=""> 
<option value="2018">2018</option>
						<option value="2019">2019</option>   
						<option value="2020">2020</option>   
						<option value="2021">2021</option>   
						<option value="2022">2022</option>   
						<option value="2023">2023</option>  
                        <option value="2024">2024</option>  
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>  
  
</select>
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}"  name="cvv" pattern="^\d{3}$" required="">
													</div>
													<div class="tab-for">				
                                                    <h5> ADVANCE AMOUNT: </h5>
                                                    <select name="amount" >
<option value="100">100</option>
<option value="500">500</option>

						
</select>
												
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT" name="submit">
											</form>
											<!--<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>-->
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		
</body>
</html>