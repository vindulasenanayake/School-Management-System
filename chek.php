<?php
	

	if(isset($_POST['search']))
	{
		$username=$_POST['username'];

		$connect =mysqli_connect("localhost","root","","school_mgt_system");

		$query = "SELECT 'names','address','class','age'FROM 'student_info' WHERE 'username'=$username";

		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result)>0){

		
		while ($row = mysqli_fetch_array($result))
		 {
           $username= $row ['username'];
	       $names=$row ['names'];
	       $age=$row ['age'];
	       $address=['address'];
	       $class =['class'];
		}

		}else{
			echo "undefined ID";
		$username="";
	    $names="";
	    $age="";
	    $address="";
	    $class ="";


	}

		mysqli_free_result($result);
	    mysqli_close($connect);
	

	}else{
		$username="";
	    $names="";
	    $age="";
	    $address="";
	    $class ="";


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
<body>
	<form action
	
	="chek.php" methods="post">
         
        <div class="col-6">                  
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 card-heading-blue">
                        <center><br><h1>Student Profile</h1> <br></center>
                    </div>
                </div>
                       
        <hr>
		 <div class="row">                                
            <div class="col-3 lbl">Username</div>
		<div class="col-9">
			<input type="text" name="username" >
		</div>
	    </div>
		<div class="row">                                
            <div class="col-3 lbl">Name</div>
		<div class="col-9">
			<input type="text" name="names"  value="<?php echo $names;?>"> <br><br>
		</div>
	    </div>
		<div class="row">                                
            <div class="col-3 lbl">Class</div>
		<div class="col-9">
			<input type="text" name="class"  value="<?php echo $class;?>"><br><br>
		</div>
	    </div>

		<div class="row">                                
            <div class="col-3 lbl">Age</div>

		<div class="col-9">
			<input type="text" name="age"  value="<?php echo $age;?>"><br><br>
		</div>
	    </div>
		<div class="row">                                
            <div class="col-3 lbl">Address</div>
		<div class="col-9">
			<input type="text" name="address"  value="<?php echo $address;?>"><br><br>
		</div>
	    </div>
		<input type ="submit" name="search" value="Find"><br><br>
	</form>
</body>
</html>