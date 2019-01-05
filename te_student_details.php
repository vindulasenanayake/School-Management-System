<?php
    session_start();
    
    if($_SESSION["type"] != 2)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
    $email="";
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Teacher | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">
       

        <?php
           if(isset($_POST["submit_user"]))
            {
                $username = $_POST['s_name'];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 2 ");
                $num = mysqli_num_rows($res);
               
                if($num == 1)
                {
                    mysqli_query($con, "DELETE FROM user_login WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM student_info WHERE username='$username' ");
                   
                    echo "<script> alert('User successfully deleted'); </script>";
                }
                else
                {
                    echo "<script> alert('Could not find user'); </script>";
                }                
            }  
        
           
                             
            
        
            if(isset($_POST["submit_reset"]))
                {
                    $username = $_POST['username'];
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
    </head>  
        
    <body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="te admin.php" class="nav-page">Previous </a>
            
            
              
        </div>        
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Teacher Panel - Student Details</div></div><br>
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
                                    <div class='center'><strong>View Students</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center' bgcolor:green>
                                    	 <a class="btn btn-green btn-large btn-wide" href="viewusers.php">view</a>
                                        
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
                                <img src="images/cover.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Student Profiles</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center' bgcolor:green>
                                         <a class="btn btn-green btn-large btn-wide" href="s_profile.php">Student Profile</a>
                                        
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
                                    <div class='center'><strong>Progress Rrports class</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="">Progress Rrports class</a>
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
                                    <div class='center'><strong>Progres Report Student</strong></div>                                  
                                </div><hr>

                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="">Progress Rrports Student</a>
                                    </div>
                                <hr>
                                
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

                 
                
            
                
                
                
                 
               
           
            </div>
            <div class="row">
            
            <br>
            <br>
            
            
             
                   
                      
        <?php include("footer.php"); ?>
        
       
        
        </body>
</html>


