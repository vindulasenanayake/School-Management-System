<?php
    

    if(isset($_POST['search']))
    {
        $username=$_POST['username'];

        $connect =mysqli_connect("localhost","root","","school_mgt_system");

        $query = "SELECT * FROM `extra_activities` WHERE username = $username";

        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result)>0){

        
            while ($row = mysqli_fetch_array($result)){
                  $username= $row['username'];
                  $year =$row['year'];
                  $activity=$row['activity'];
               
    
            }

        }

        else{
            echo "undefined ID";
               $username= "";
               $year="";
               $activity="";
               

    }
        

    mysqli_free_result($result);
    mysqli_close($connect); 

    }

    else{
        $username= "";
        $year ="";
        $activity="";
              
    }

?>


<html>
<head>
	<head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        
       
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
	
        <center>
        	<form action="Admin_c_view.php" method="post"  
        	<div class="col-6" >                  
            <div class="card-profile">
                <div class="row">
                    <div class="col-12 ">
                        <br><img src="images/logo2.png"></a> <br>
                    </div>
                </div>
                       
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
	    <p align="left"> Charini Peiris was a student of Lumbini College,colombo 05.</p>
	    <p align="left">During his career in school he has oarticipated in extracurricular activities as follows:</p>
	    <div class="col-9" align="left">
	    	
	    	<?php echo "* ".$year." - " ;?>
	    	<?php echo $activity; ?>
	    
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