<?php
	$username="";
	$names="";
	$age="";
	$address="";
	$class ="";

	if(isset($_POST['search']))
	{
		$username=$_POST['username'];

		$connect =mysqli_connect("localhost","root","","school_mgt_system");

		$query = "SELECT 'names','address','class','age',FROM 'student_info' WHERE 'username'=$username";

		$result = mysqli_query($connect, $query);

		while ($row = mysqli_fetch_array($result))
		 {
           $username= $row ['username'];
	       $names=$row ['names'];
	       $age=$row ['age'];
	       $address=['address'];
	       $class =['class'];
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
</head>
<body>
	<form action="chek.php" methods="post">
		Username:<input type="text" name="username" ><br><br>
		Name:<input type="text" name="names"  value="<?php echo $names;?>"> <br><br>
		Class:<input type="text" name="class"  value="<?php echo $class;?>"><br><br>
		Age:<input type="text" name="age"  value="<?php echo $age;?>"><br><br>
		Address:<input type="text" name="address"  value="<?php echo $address;?>"><br><br>
		<input type ="submit" name="search" value="Find"><br><br>
	</form>
</body>
</html>