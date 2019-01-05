<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

?>


        <?php

            if(isset($_POST["btn_submit"]))
            {   
              
                include("connection.php");
                
                
                    $username =($_POST["username"]);
                    $year = $_POST["year"];
                    $activity= $_POST["activity"];
                   
                      
                  $sql = "INSERT INTO `extra_activities`(`username`, `year`, `activity`) VALUES ('$username', '$year', '$activity')";
                   if ($con->query($sql) === TRUE) {
                 echo "New record created successfully";
                 
                } else {
                  echo "Error " . $sql . "<br>" . $con->error;
                }      
                   
                

            }


        ?>
<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        
    </head>  
    
    <body class="font">  
        
           
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
          <a href="Admin_character_index.php" class="nav-page"> Previous </a> 
            
        </div> 
        <br>
        <br>
        <br>
        <br>

        
       
      
            
      <center>
           <form action="Admin_c_extra.php" method="POST">

               
                <div class="col-6 center">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Extara Currricular Activities</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                        <div class="row">                                
                            <div class="col-3 lbl">Username</div>
                            <div class="col-9">
                                <input type="text" id="username" name="username" placeholder="Username" >
                            </div>
                        </div>

                        <br>



                        <div class="row">
                            <div class="col-3 lbl">Year</div>
                            <div class="col-9">
                                <input type="text" id="year" name="year" placeholder="Year" >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Activity</div>
                            <div class="col-9">
                               <input type="text" id="activity" name="activity" placeholder="Activity" >
                            </div>
                        </div>
                                   
                        <br>

                        <button name="btn_submit" id="btn_submit" type="submit" class="btn btn-green btn-large " >Submit</button>              

                        



            </form>
      </center>

     <?php include("footer.php"); ?>
    </body>
</html>

