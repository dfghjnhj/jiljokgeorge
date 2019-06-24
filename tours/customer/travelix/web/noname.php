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
			echo "<script>alert('not suffient balance!;');window.location.href='daye.php';</script>";
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
		
  echo "<script>alert('succeesfuly Booked! $amt;');window.location.href='../vehibooking.php';</script>";
 
		}
		}
}
	else
	{
	echo "<script>alert(' Paiment not succeesfuly!');window.location.href='details.php';</script>";
	}
}			
	?>
	

	<div class="main">
		<h1>Payment Form Widget</h1>
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
											<select name="bank">
                    <option value="sib">sib</option>
                     <option value="canara">canara</option>
					 <option value="fedaral">fedaral</option>
					 <option value="canara">icici</option>
										 </select><div>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="c_name" pattern="^[a-zA-Z]+$" required="">
													<h5>CARD NUMBER</h5>													
														<input type="text" name="c_no" class="input-text" placeholder="enter 12
							 digit number" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																<h5>MONTH</h5>	
																<select name="month">
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
																<select name="year"> 
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
                                                    <h5>AMOUNT: </h5>
                                                    <select name="amount" >
<option value="1000">1000</option>
<option value="2000">2000</option>
<option value="3000">3000</option>
						
</select>
												
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT" name="submit">
											</form>