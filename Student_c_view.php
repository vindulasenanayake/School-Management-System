
<?php
     error_reporting(0);
     ini_set('display_errors', 0);
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
        
       
</head>
<body class="font">        
        <div class="nav-fixed font">
             <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a>
            <a href="Student_index.php" class="nav-page"> Previous </a> 
           
        </div>
        <div>
        	<br>
            <br>
            <br>
            <br>
        </div> 
	
        
    <center>
        <form action="Student_c_view.php" method="post" >
        	
  
        	<div class="col-6" >
        	<div class="row">                                
            	<div class="col-5 lbl">Index Number</div>
		    <div class="col-3"  >
				<input type="text" name="username" >	
		    </div><br>
		        <input type ="submit" name="search" value="search" class="btn btn-green btn-large "><br><br>                  
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 ">
                        <br><img src="images/logo2.png"></a> <br>
                    </div>
                </div>
                       
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

	    

	
		
		</form>
    </center> 
        
</body>
</html>
	   
	    
        