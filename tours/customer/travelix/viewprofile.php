<?php
	session_start();
	include("database.php");

	$query="select * from tbn_registration where rid=\"".$_SESSION['u_id']."\"";
	$query_exe=mysqli_query($con,$query);



	if($query_exe){
		while($resultset=mysqli_fetch_assoc($query_exe)){
				$name=$resultset['name'];
				$address=$resultset['address']; 
				$gender=$resultset['gender'];
				$email=$resultset['email'];
        
				$phone=$resultset['phone'];
				
			}
	}



					$json="{
						\"name\":\"".$name."\",
						\"address\":\"".$address."\",
						\"gender\":\"".$gender."\",
						\"phone\":\"".$phone."\",
                        \"email\":\"".$email."\",
					}" ;




	echo $json;

?>
