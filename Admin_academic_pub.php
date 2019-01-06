<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

   
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Admin panel | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">
     </head>  

        
        
    <body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="Admin_student.php" class="nav-page">Previous </a>
            <a href="Admin_character_index.php" class="nav-page">Character Certificate </a>     
        </div>        
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Admin Panel  -  Academic and Publications</div></div><br>
           
            <div class="container ">
            <br>
            <div class="row">
                
               <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/student.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Upload Timetable</strong></div>                                  
                                </div><hr>

                                    
                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="timeTable.php">Upload Timetable</a>
                                    </div>
                                    
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>              
                
                
                  <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/student.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Upload Pastpapers</strong></div>                                  
                                </div><hr>

                                    
                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="pastpapers.php">Upload Pastpapers</a>
                                    </div>
                                    
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>              
                
                
                
              
                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/student.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Upload Notices</strong></div>                                  
                                </div><hr>

                                    
                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="notices.php">Upload Notices</a>
                                    </div>
                                    
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/cover.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Upload Results</strong></div>                                  
                                </div><hr>

                                    
                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="timeTable.php">Upload Results</a>
                                    </div>
                                    
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                 
               
           
           
            
            
           
                
                
                      
        <?php include("footer.php"); ?>
        
       
        
        </body>
</html>


