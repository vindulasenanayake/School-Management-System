<?php
	

	if(isset($_POST['search']))
	{
		$username=$_POST['username'];

		$connect =mysqli_connect("localhost","root","","school_mgt_system");

		$query = "SELECT * FROM `student_info` WHERE username = $username";

		$result = mysqli_query($connect, $query);


		if(mysqli_num_rows($result)>0){

		
			while ($row = mysqli_fetch_array($result)){
	           $username= $row['username'];
		       $names=$row['names'];
		       $age=$row['age'];
		       $address=$row['address'];
		       $class =$row['class'];
		       $gender=$row['gender'];
	           $telephone=$row['telephone'];
	
			}

		}

		else{
			echo "undefined ID";
			$username="";
		    $names="";
		    $class ="";
		    $age="";
		    $gender="";
		    $address="";
		    $telephone="";
	}
		

	mysqli_free_result($result);
	mysqli_close($connect);	

	}

	else{
		$username="";
	    $names="";
	    $class ="";
	    $age="";
	    $gender="";
	    $address="";
	    $telephone="";
	}

?>


<html>
<head>
	<head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <style>
            body {
            background-image: url("images/sh.jpg");
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
</head>
<body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
           
        </div>
        <div>
        	<br>
            <br>
            <br>
            <br>
        </div> 
	
        <center>
        	<form action="Admin_student_profile.php" method="post">
        	<div class="col-6" >                  
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 card-heading-blue">
                        <center><br><h1>Student Profile</h1> <br></center>
                    </div>
                </div>
                       
        	<hr>
		 	<div class="row">                                
            	<div class="col-3 lbl">Username</div>
			<div class="col-5">
				<input type="text" name="username" >
		
				<input type ="submit" name="search" value="Find" class="btn btn-green btn-large btn-wide"><br><br>
			
			</div>

	    	</div>


			<div class="row">                                
            	<div class="col-3 lbl">Name</div>
			<div class="col-9">
				<input type="text" name="names"  value="<?php echo $names; ?>"> <br><br>
			</div>
	    	</div>
			<div class="row">                                
            	<div class="col-3 lbl">Class</div>
			<div class="col-9">
				<input type="text" name="class"  value="<?php echo $class; ?>"><br><br>
			</div>
	    	</div>

	    	<div class="row">                                
            	<div class="col-3 lbl">Gender</div>
			<div class="col-9">
				<input type="text" name="gender"  value="<?php echo $gender; ?>"><br><br>
			</div>
	    	</div>

			<div class="row">                                
            	<div class="col-3 lbl">Age</div>

			<div class="col-9">
				<input type="text" name="age"  value="<?php echo $age; ?>"><br><br>
			</div>
	    	</div>
			<div class="row">                                
            	<div class="col-3 lbl">Address</div>
			<div class="col-9">
				<input type="text" name="address"  value="<?php echo $address; ?>"><br><br>
			</div>
	    	</div>
	    	<div class="row">                                
            	<div class="col-3 lbl">Telephone</div>
	    	<div class="col-9">
				<input type="text" name="telephone"  value="<?php echo $telephone; ?>"><br><br>
			</div>
	    	</div>

	    	
			</form>
        </center> 


     <?php include("footer.php"); ?>   
     
</body>


</html>