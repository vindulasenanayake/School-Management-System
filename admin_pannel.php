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
        
        <title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
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
                    mysqli_query($con, "DELETE FROM cust_info WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_name WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_qual_deg WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM cust_qual WHERE username='$username' ");
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
                    mysqli_query($con, "DELETE FROM client_contact WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM client_info WHERE username='$username' ");
                    mysqli_query($con, "DELETE FROM client_job_vc WHERE username='$username' ");
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
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-inverse header">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><b>Home</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="ac_admin.php"><b>Academic and Publications</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="logout.php"><b>logout</b></a></li>
                            <li class="hidden-xs"></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <section>

            <div class="banner-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h1>Admin Panel | Lumbini College</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="blogs-home common-heading-2">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/student.jpg" alt=""/>
                                    </div>
                                    <div class="bottom-details">
                                      
                                        
                                        <a href="admin.php">STUDENT</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/teacher.jpg" alt="" />
                                    </div>
                                    <div class="bottom-details">
                                        
                                        
                                        <a href="te_admin.php">TEACHER</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <div class="blog-list">
                                    <div class="image">
                                        <img src="images/prin.jpg" alt="" />
                                    </div>
                                    <div class="bottom-details">
                                        
                                        
                                        <a href="prin_admin.php">PRINCIPAL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </section>

        <!-- section ends here -->

        <!-- footer starts here -->

        <footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        
                        <p class="copy-rights">Copyright by Lumbini College &reg;</p>
                    </div>
                </div>
            </div>
            
        </footer>

        <!-- footer ends here -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>