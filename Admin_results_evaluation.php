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
            <a href="lpogout.php" class="nav-page"> Logout </a> 
            <a href="Admin_student.php" class="nav-page">Previous </a>      
        </div>
               
                    
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Admin Panel - Result Evaluation</div></div><br>
            
            <div class="container ">
            
            <div class="row">
                
                <div class="col-3 center">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/student.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'></div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Report Cards</strong></div>                                  
                                </div><hr>
                                    <div class='center'>                                                                               
                                        <a class="btn btn-green btn-large btn-wide" href="Admin_re_reportcard.php">Report Card</a>
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
                                <img src="images/cover.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Student Progress</strong></div>                                  
                                </div><hr>
                                    <div class='center'>                                                                               
                                        <a class="btn btn-green btn-large btn-wide" href=".php">Student Progress</a>
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
                                    <div class='center'><strong>Class Progress</strong></div>                                  
                                </div><hr>
                                    <div class='center'>                                                                               
                                        <a class="btn btn-green btn-large btn-wide" href=".php">Class Progress</a>
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
                                    <div class='center'><strong>Overall progress</strong></div>                                  
                                </div><hr>
                                    <div class='center'>                                                                               
                                        <a class="btn btn-green btn-large btn-wide" href=".php">Overall Progress</a>
                                    </div>
                                    
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                 
               
           
                 
        <?php include("footer.php"); ?>
        
       
        
    </body>
</html>


