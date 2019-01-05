<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

    $username = "";
    $display_name = "";
    $display_type = "";
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Admin panel | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">
       

        <?php
           if(isset($_POST["submit_user"]))
            {
                $username = $_POST["username"];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 4 ");
                $num = mysqli_num_rows($res);
               
                if($num == 1)
                {
                    mysqli_query($con, "DELETE FROM user_login WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM principals_info WHERE username='$username' ");
                   
                    echo "<script> alert('User successfully deleted'); </script>";
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
            <a href="Admin_pannel.php" class="nav-page">Previous </a>      
        </div>        
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Admin Panel  -  Principal</div></div><br>
            <div class="row">
                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="images/prin.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Register a Principal</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>
                                


                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="register.php">Register</a>
                                        </div>
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
                                <img src="images/prin.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>View Principals</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center' bgcolor:green>


                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="Admin_view_principal.php">view</a>
                                        </div>
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
                                <img src="images/prin.jpg" width="100%"  >
                            </div>
                        <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Principals Profile</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>

                                <div class='center'>
                                    <a class="btn btn-green btn-large btn-wide" href="Admin_principal_profile.php">Principals Profile</a> 
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
                                <img src="images/prin.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Delete a Principal</strong></div>                                  
                                </div><hr>

                                    <div class='center'>
                                        <form action="Admin_principal.php" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            <input type="text" required name="username" placeholder="Type username">
                                            <button type="submit" name="submit_user" class="btn btn-green btn-large btn-wide">Delete</button>
                                        </form>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

                 
            
                
                
               
           
            
                      
        <?php include("footer.php"); ?>
        
       
        
    </body>
</html>


