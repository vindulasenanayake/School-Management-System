	
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/viewusers.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css"></li>

	</head>
		<body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="prin_admin.php" class="nav-page">Previous </a>      
        </div>
        <div>
        	<br>
            <br>
            <br>
            <br>
        </div> 
           


		

		

<?php 


session_start();

if(!isset($_SESSION['admin'])){
	header("login.php");
}




 include("connection.php");


$query="SELECT * FROM principals_info";
$result=mysqli_query($con,$query);
$numrow = mysqli_num_rows($result);

echo "	 
			<table>
			 	<tr>
			 		<th> Username </th>
			 		<th> Name </th>
			 		<th> Email</th>
			 		<th> Address </th>
			 		<th> Class </th>
			 		<th> Telephone </th>
			 		<th> Gender </th>
			 		<th> Age</th>
			 	
			 		
			 	</tr>";

if($numrow>0){
	
	while($row = mysqli_fetch_assoc($result)){
		$username=$row['username'];
		$names =$row['names'];
		$email=$row['email'];
		$address=$row['address'];
		$class=$row['class'];
		$telephone=$row['telephone'];
		$gender=$row['gender'];
		$age=$row['age'];
	
		
		
		

		// echo $Username.'<br>';
		// echo $Location. '<br>';
		// echo $Email. '<br>';
		// echo $Website. '<br>';
		// echo $Category. '<br>';
		// echo $Businessname. '<br>';
		// echo '<br>';

		echo '<tr>
			 		<td>'.$username.'</td>
			 		<td>'.$names.'</td>
			 		<td>'.$email.'</td>
			 		<td>'.$address.'</td>
			 		<td>'.$class.'</td>
			 		<td>'.$telephone.'</td>
			 		<td>'.$gender.'</td>
			 		<td>'.$age.'</td>
			 
			 		
			 		
			 	</tr>';
	}
	echo "</table><br>";
}

// esle{
// 	echo "Empty Database";
// }
?>


</body>
</html>