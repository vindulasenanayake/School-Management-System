<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

?>
<html>
    <head>
        
        <title>Admin Pannel | Lumbini College</title>
        <link href="css/style1.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
       
    </head>
    <body>
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
        </div>   

        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Admin Pannel</div></div><br>

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
                                    <div class='center'><strong>Student</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>
                                


<<<<<<< HEAD
                                    
                                <div class='center'>                                                                               
                                    <a class="btn btn-green btn-large btn-wide" href="Admin_student.php">Student</a>
                                </div>
                                  
=======
                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="admin.php">Student</a>
                                        </div>
                                    </div>
>>>>>>> 06b5edf6c9396e4d7b2f1d307ebbbb6376e2b286
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                </div>
                
                
                
                <div class="col-3 center">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/teacher.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Teacher</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

<<<<<<< HEAD
                                    
                                <div class='center'>                                                                               
                                    <a class="btn btn-green btn-large btn-wide" href="Admin_teacher.php">Teacher</a>
                                </div>
=======
                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="te_admin.php">Teacher</a>
                                        </div>
                                        </form>
                                    </div>
>>>>>>> 06b5edf6c9396e4d7b2f1d307ebbbb6376e2b286
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                
                                
                <div class="col-3 center">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/prin.jpg" width="100%" >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'></div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Principal</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

<<<<<<< HEAD
                                <div class='center'>
                                    <div class='center'>                                                                               
                                        <a class="btn btn-green btn-large btn-wide" href="Admin_principal.php">Principal</a>
=======
                                    <div class='center'>
                                       <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="prin_admin.php">Principal</a>
                                        </div>
>>>>>>> 06b5edf6c9396e4d7b2f1d307ebbbb6376e2b286
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                </div>

            
            
            
                
               
                
                    
                      
        <?php include("footer.php"); ?>

        

      
    </body>
</html>