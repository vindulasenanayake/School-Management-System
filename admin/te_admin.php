<?php
    session_start();
    
    if($_SESSION["type"] != 3)
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
        <link href="../css/style1.css" rel="stylesheet" type="text/css">
        <title> Admin panel | Lumbini College! </title>
        <link rel="icon" href="../images/logo1.png" type="image/png">
       

        <?php
           if(isset($_POST["submit_user"]))
            {
                $username = $_POST["user_s"];
                include("../db_connection/connection.php");  
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
        
            if(isset($_POST["submit_company"]))
            {
                $username = $_POST["user_s"];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 2 ");
                
                $num = mysqli_num_rows($res);
               
                if($num == 1)
                {
                    mysqli_query($con, "DELETE FROM user_login WHERE username='$username' ");
                  
                    echo "<script> alert('User successfully deleted'); </script>";
                }
                else
                {
                    echo "<script> alert('Could not find user'); </script>";
                }                
            }
        
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
    </head>  
        
    <body class="font">        
        <div class="nav-fixed font">
            <a href="logout.php"> <img src="../images/logo.png"></a>

               
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="admin_pannel.php" class="nav-page">Previous </a>
             
        </div>        
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Admin Panel  -  Teacher</div></div><br>
            <div class="row">
                
                <div class="col-3">
                    <div class='card-container'>                           
                        <div class='card-job card-top'>
                            <div>
                                <img src="../images/teacher.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Register a Teacher</strong></div>                                  
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
                                <img src="../images/teacher.jpg" width="100%">
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>View Teachers</strong></div>                                  
                                </div><hr>
                                    <br>
                                    <br>
                                    <br>
                                    


                                    <div class='center' bgcolor:green>


                                           <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="te_viewusers.php">View</a>
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
                                <img src="../images/teacher.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Teachers Profiles</strong></div>                                  
                                </div><hr>
                                <br>
                                <br>
                                <br>
                                    

                                    <div class='center'>
                                        <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="t_profile.php">Teachers Profiles</a>
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
                                <img src="../images/teacher.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Delete a Teacher</strong></div>                                  
                                </div><hr>

                                    <div class='center'>
                                        <form action="te_admin.php" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
                                            <input type="text" required name="user_s" placeholder="Type username">
                                            <button type="submit" name="submit_user" class="btn btn-green btn-large btn-wide">Delete</button>
                                        </form>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>

                 
            
                
                
               
           
            </div>
            
               
           
            </div>
            <div class="row">
                <div class="col-6">
                
                <?php
                    if (isset($_POST["submit_view"]))
                    {
                        echo "All password reset requests"; 
                    }
                
                ?>
            
            
                </div>
            </div>
            <br>
            <br>
            
            
             <div class="row" id="cust_table" style="display:none">
                
                <?php
                     if(isset($_POST["submit_view_user"]))
                    {
                        $username = $_POST["user_name"];
                        include("connection.php");  
                        $res = mysqli_query($con, "SELECT type FROM user_login WHERE username='$username' ");
                        $row = mysqli_fetch_row($res);


                        if($row[0] == 1)
                        {
                            $res2 = mysqli_query($con, "SELECT * FROM cust_name WHERE username='$username' ");
                            $row2 = mysqli_fetch_row($res2);
                            $display_name = $row2[2]." ".$row2[3]." ".  $row2[4];
                            $display_type = "Student";

                            echo "<script> document.getElementById('cust_table').style.display='block'; </script>";
                        }
                       else if($row[0] == 2)
                        {
                            $res2 = mysqli_query($con, "SELECT * FROM teachers_info WHERE username='$username' ");
                            $row2 = mysqli_fetch_row($res2);
                            $display_name = $row2[1];
                            $display_type = "Teacher";
                            echo "<script> document.getElementById('cust_table').style.display='block'; </script>";
                        }
                        else
                        {
                            echo "<script> alert('Could not find user'); </script>";
                        }                
                    }
                ?>
                
                    <div class="col-5 center">
                        <div class="card">
                            <h2>User Details</h2>
                        <table class="table table-striped center">
                            <tr><th>Username</th><th>Account type</th></tr>
                            <tr><td><?php echo $username;  ?></td></td><td><?php echo $display_type; ?></td></tr>
                        </table>

                        </div>
                    </div>
            </div>
        </div> 
                      
        <?php include("footer.php"); ?>
        
       
        
        </body>
</html>

