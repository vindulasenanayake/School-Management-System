<html>
<head>
	<title>Student Profiles</title>
	<link rel="stylesheet" type="text/css" href="editusers.css">
</head>
<body>

	<hr style="margin-left:20px; margin-right:20px; opacity: 0.5; height:2px; margin-top: 7%">

	<div>
		
		
			<a href="logout.php"><button name="logout" class="form_button_logout">Logout</button></a>
		
			<a href="admin.php"><button type="submit" name="" class="form_button_main"> Admin </button></a>

	
		
		
		<form method="POST" action="">	
			<button type="submit" name="uview" class="form_botton_view"> View Users </button><br>
			<t1> Input User name: </t1><input type="text" name="searchname" class="form_input">
		</form>
	
	</div>

</body>
</html>



<?php  

session_start();
if(!isset($_SESSION['admin'])){
	header('location:login.php');
}



$con = mysqli_connect("localhost" , "root" , "" , "school_mgt_system");

if(!$con){
	die("Database Connection Failed");
}


if(isset($_POST['uview'])){
	$vquery="SELECT * FROM student_info";
	$vresult=mysqli_query($con,$vquery);


	$numrow=mysqli_num_rows($vresult);

		echo "	 
			<table>
			 	<tr>
			 		<th> Username</th>
			 		<th> Email </th>
			 		<th> Address</th>
			 		<th> Class</th>
			 		<th> Telephone </th>
			 		<th> Gender </th>
			 		<th> Age</th>
			 		<th> Profile Picture </th>
			 	</tr>";



	if($numrow>0){
		while($row=mysqli_fetch_assoc($vresult)){
			$username=$row['username'];
			$email=$row['email'];
			$address=$row['address'];
			$class=$row['class'];
			$gender=$row['gender'];
			$age=$row['age'];
			$Tele=$row['tel'];
			$pro_pic=$row['pro_pic'];
			



			// echo $username;
			// echo $Location;
			// echo $Email;
			// echo $Website;
			// echo $Category;
			// echo $Businessname;



			echo '<tr>
			 		<td>'.$username.'</td>
			 		<td>'.$email.'</td>
			 		<td>'.$address.'</td>
			 		<td>'.$class.'</td>
			 		<td>'.$gender.'</td>
			 		<td>'.$age.'</td>
			 		<td>'.$pro_pic.'</td>
			 		
			 		<td style="width:50px; height:50px;"><img class="viewimage" src=../../images/..'.$logo.'></td>
			 	</tr>';
		}
	echo '</table><br>';
	}
}

?>