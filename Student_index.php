<?php
    session_start();
    
    if($_SESSION["type"] != 1)
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
       <?php
            if(isset($_POST["submit_reset"]))
                {
                    $username = $_POST["user_s"];
                    include("connection.php");  
                    $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username'");

                    $num = mysqli_num_rows($res);

                    if($num == 1)
                    {
                        mysqli_query($con, "UPDATE user_login SET pw=md5('12345') WHERE username='$username' ");
                        echo "<script> alert('Password successfully reset. New password is 12345'); </script>";
                    }
                    else
                    {
                        echo "<script> alert('Could not find user'); </script>";
                    }                
                }

           
        
        ?>

        
    <head>
        
        <title>Admin Pannel | Lumbini College</title>

        
        <link href="css/style1.css" rel="stylesheet">
        
        
        <link rel="icon" href="images/logo1.png" type="image/png">
       
        
    </head>


    <body>
        <header>
            <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="student_profile.php" class="nav-page">Profile</a>
            <a href="student_report.php" class="nav-page">Report Card</a>
            <a href="display.php" class="nav-page">Past Papers</a>
        </div>  
         <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Student</div></div><br> 

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
                                    <div class='center'><strong>Notices</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="studentnotice.php">VIEW</a>
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
                                         <a class="btn btn-green btn-large btn-wide" href="studenttimetable.php">VIEW</a>
                                        
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
                                    <div class='center'><strong>Activities</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                   



                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href="studentactivity.php">VIEW</a>
                                        
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
                                    <div class='center'><strong> Extra Activities</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                   



                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href="Student_c_view.php">VIEW</a>
                                        
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