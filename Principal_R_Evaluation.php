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
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Admin panel | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">
       

        <?php
           if(isset($_POST["submit_user"]))
            {
                $username = $_POST["user_s"];
                include("connection.php");  
                $res = mysqli_query($con, "SELECT * FROM user_login WHERE username='$username' AND type = 1 ");
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
                    
                    mysqli_query($con, "DELETE FROM teachers_info WHERE username='$username' ");
                   
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

               
            <a href="lpogout.php" class="nav-page"> Logout </a> 
            <a href="Principal_index.php" class="nav-page">Previous </a>      
        </div>        
        
        
        
        
        <div class="container ">
            <div class="row"><div class="col-5 center big card-heading-blue">Principal- Result Evaluation</div></div><br>
            <div class="row">
                
                

               
           
            </div>
            <div class="container ">
            <br>
            <div class="row">
                
                <div class="col-3 center">
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
                                    <div class='center'><strong>Report Cards</strong></div>                                  
                                </div><hr>

                                    <div class='center'>
                                       
                                     <div class='center'>                                                                               

                                         <a class="btn btn-green btn-large btn-wide" href="Admin_re_reportcard.php"> Report Cards</a>

                                         <a class="btn btn-green btn-large btn-wide" href="Admin_re_reportcard.php"> View</a>

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
                                <img src="images/cover.jpg" width="100%"  >
                            </div>
                            <div class='col-12'>
                            <br>
                                <div class='row'>
                                    <div class='center' style='padding-right:0.1rem; padding-left:0.1rem;font-weight:bold;'>

                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='center'><strong>Overall Results</strong></div>                                  
                                </div><hr>

                                     <div class='center'>
                                       
                                     <div class='center'>                                                                               
                                         <a class="btn btn-green btn-large btn-wide" href="Principal_Grade_Prog.php">Overall Results</a>
                                    </div>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                
                
              
                
                <div class="col-3">

               
                
              
                
                <div class="col-3 center">

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

                                </div><hr>

                                    <div class='center'>
                                       
                                     <div class='center'>                                                                               

                                         <a class="btn btn-green btn-large btn-wide" href="Principal_Class_Prog.php">Class Results</a>

                                         <a class="btn btn-green btn-large btn-wide" href=".php">View</a>

                                    </div>
                                    </div>
                                <hr>
                                
                            </div>
                        </div>                  
                    </div>
                 </div>
                

                <div class="col-3">

                <div class="col-3 center">

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

                                    <div class='center'><strong>AL Results</strong></div>                                  

                                    <div class='center'><strong>Overall progress</strong></div>                                  

                                </div><hr>

                                  <div class='center'>
                                       
                                     <div class='center'>                                                                               

                                         <a class="btn btn-green btn-large btn-wide" href="Principal_AL_Prog.php">AL Results</a>

                                         <a class="btn btn-green btn-large btn-wide" href=".php">View</a>

                                    </div>
                                    </div>
                                <hr>
                                
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
                       /* else if($row[0] == 2)
                        {
                            $res2 = mysqli_query($con, "SELECT * FROM teachers_info WHERE username='$username' ");
                            $row2 = mysqli_fetch_row($res2);
                            $display_name = $row2[1];
                            $display_type = "Company";
                            echo "<script> document.getElementById('cust_table').style.display='block'; </script>";
                        }*/
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
                            <tr><th>Username</th><th>Name</th><th>Account type</th></tr>
                            <tr><td><?php echo $username;  ?></td><td><?php echo $display_name; ?></td><td><?php echo $display_type; ?></td></tr>
                        </table>

                        </div>
                    </div>
            </div>
        </div> 
                      
        <?php include("footer.php"); ?>
        
       
        
        </body>
</html>


