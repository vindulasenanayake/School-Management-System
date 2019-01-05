<<<<<<< HEAD
<?php
   

    if(isset($_POST['search']))
    {
        $username=$_POST['username'];

        $connect =mysqli_connect("localhost","root","","school_mgt_system");

        $query = "SELECT * FROM `extra_activities` WHERE username = $username";
        $query2 = "SELECT * FROM `student_info` WHERE username = $username";

        $result1 = mysqli_query($connect, $query);
        $result2 = mysqli_query($connect, $query2);

        $row1 = mysqli_fetch_row($result1);
        $row2 = mysqli_fetch_row($result2);
    }


        

?>


<html>
<head>
	<head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
=======

<?php
	 if(isset($_POST['search']))
    {
    	$username = $_POST['username'];
    	$query = "SELECT * FROM `extra_activities` WHERE username =$username ";
    	$search_result = filterTable($query);


    	
        $connect =mysqli_connect("localhost","root","","school_mgt_system");
        $query2 = "SELECT * FROM `student_info` WHERE username = $username ";
        $result2 = mysqli_query($connect, $query2);

        
        $row2 = mysqli_fetch_row($result2);
    	}



    	
    	function filterTable($query){
    		$connect =mysqli_connect("localhost","root","","school_mgt_system");
    		$filter_result =mysqli_query($connect, $query);
    		
    		return $filter_result;

    	}
?>





<html>
<head>
	
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <title> Student Profile | Lumbini College</title>
    <link rel="icon" href="images/logo1.png" type="image/png">
>>>>>>> 0b918d14b51a110b79de95c133ed45996c746e7e
        
       
</head>
<body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a>
            <a href="Admin_character_index.php" class="nav-page"> Previous </a> 
           
        </div>
        <div>
        	<br>
            <br>
            <br>
            <br>
        </div> 
	
<<<<<<< HEAD
        <center>
        	<form action="Admin_c_view.php" method="post"  
        	<div class="col-6" >                  
=======
        
    <center>
        <form action="Admin_c_view.php" method="post" >
        	
  
        	<div class="col-6" >
        	<div class="row">                                
            	<div class="col-5 lbl">Index Number</div>
		    <div class="col-3"  >
				<input type="text" name="username" >	
		    </div><br>
		        <input type ="submit" name="search" value="search" class="btn btn-green btn-large "><br><br>                  
>>>>>>> 0b918d14b51a110b79de95c133ed45996c746e7e
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 ">
                        <br><img src="images/logo2.png"></a> <br>
                    </div>
                </div>
                       
<<<<<<< HEAD
        <hr>
		 <div class="row"  align="left">                                
            <div class="col-3 lbl">My Number</div>
		<div class="col-5"  align="left">
			<input type="text" name="username" >
		
			
		</div><input type ="submit" name="search" value="Find" class="btn btn-green btn-large "><br><br>

	    </div>
	     <div class="row" align="left"  align="left">                                
            <div class="col-3 lbl">Date</div>
		<div class="col-5"  align="left" >
			<br>
			<?php
				echo  date("Y/m/d") . "<br>";
			?>
			
		</div>

	    </div>

	    <p align="left"><b>To whom it may concern:</b></p>
	    <p align="left"><?php echo $row2[1]; ?> was a student of Lumbini College,colombo 05.</p>
	    <p align="left">During his career in school he has oarticipated in extracurricular activities as follows:</p>
	    <div class="col-9" align="left">
	    	
	    	<?php echo "* ".$row1[1]." - " ;?>
	    	<?php echo $row1[2]; ?>
	    
        </div>
	    <p  align="left">He was obidient ,honest and trustworthy.Hisconduct and behavior was saisfactory.</p>
	    <p  align="left">I wish him success in all his future endeavers.</p><br>
	    <br>
	    
	    <p  align="left">.......................</p><br>
	    <p  align="left">Principal</p>





		
		
	</form>
        </center> 
        
</body>
</html>
=======
            <hr>
		    
	        <div class="row" align="left">                                
            	<div class="col-3 lbl">Date</div>
		    <div class="col-5"  align="left" >
			<br>
			   <?php
					echo  date("Y/m/d") . "<br>";
			   ?>
			
		    </div>

	        </div>

	        	<p align="left"><b>To whom it may concern:</b></p>
	          	<p align="left"><?php echo $row2[1]; ?> was a student of Lumbini College,colombo 05.</p>
	    	  	<p align="left">During his career in school he has participated in extracurricular activities as follows:</p>

	    	<div class="col-9" align="left">
	    	
	    		<table>
	    			<?php while($row =mysqli_fetch_array($search_result)):?>
	    				<tr>
	    		      		<td><?php echo "* ".$row[1]." - " ;?></td>
	    		       		<td><?php echo $row[2]; ?></td>
	    	        	</tr>
	    	        <?php endwhile ?>
	    		</table>
			</div>

	    	<p  align="left">He was obidient,honest and trustworthy.His conduct and behavior was saisfactory.</p>
	    	<p  align="left">I wish him success in all his future endeavors.</p><br>
	    	<br>
	    
	    	<p  align="left">.......................</p><br>
	    	<p  align="left">Principal</p>


	
		
		</form>
    </center> 
        
</body>
</html>
	   
	    
        
>>>>>>> 0b918d14b51a110b79de95c133ed45996c746e7e
