<?php
    session_start();
    
    if($_SESSION["type"] != 4)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
?>



<html>
    <head>
        
        <title>Lumbini College</title>

       
        <link href="css/style1.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
       

        
    <head>
        
        <title>Principal | Lumbini College</title>

        
        <link href="css/style1.css" rel="stylesheet">
        
        
        <link rel="icon" href="images/logo1.png" type="image/png">
       
        
    </head>
    <body>
        <header>
            <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
         
            
        </div>  
         <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Principal</div></div><br> 

            <div class="row">
                
              
                
                
               <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/sh.jpg" width="100%">
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
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href=""> Upload Notices</a>
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
                                <img src="images/sh.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong> Student Profiles</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href="Admin_student_profile.php">Student Profiles</a>
                                        
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

                 <div class="col-3 center">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/sh.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>TimeTable</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                   



                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href=".php">Time Table</a>
                                        
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
                                <img src="images/student.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Result Evaluation</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                   



                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href="Principal_R_Evaluation.php">Result Evaluation</a>
                                        
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

                 
                
            
                
                
                
                 
               
           
            </div>
        
             
                   
        
      <?php include("footer.php"); ?>

       

        
      
    </body>
</html>