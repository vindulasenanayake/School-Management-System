	
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
            <a href="admin_teacher.php" class="nav-page">Previous </a>      
        </div>
        <div>
        	<br>
            <br>
            <br>
            <br>
        </div> 
           

<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
    


 


 include("connection.php");


$query="SELECT * FROM teacher_info";
$result=mysqli_query($con,$query);

$numrow = mysqli_num_rows($result);

echo "	 
			<table>
			 	<tr>
			 		<th> Username </th>
			 		<th> Name </th>
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
	
		$address=$row['address'];
		$class=$row['class'];
		$telephone=$row['telephone'];
		$gender=$row['gender'];
		$age=$row['age'];
	
		
		
		

		

		echo '<tr>
			 		<td>'.$username.'</td>
			 		<td>'.$names.'</td>
			 		
			 		<td>'.$address.'</td>
			 		<td>'.$class.'</td>
			 		<td>'.$telephone.'</td>
			 		<td>'.$gender.'</td>
			 		<td>'.$age.'</td>
			 
			 		
			 		
			 	</tr>';
	}
	echo "</table><br>";
}


?>


</body>
</html>