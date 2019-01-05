<?php
    session_start();

    if(isset($_SESSION["user"]))
    {
        if ($_SESSION["type"] == 1)
        {
            header('Location:Student_index.php');
        }
        else if ($_SESSION["type"] == 2)
        {
            header('Location:te admin.php');
        }
         else if ($_SESSION["type"] == 4)
        {
            header('Location:Principal_index.php');
        }
        else if ($_SESSION["type"] == 3)
        {
            header('Location: admin_pannel.php');
        }
    }

    if(isset($_COOKIE["user"]) && isset($_COOKIE["type"]))
    {
        $_SESSION["user"] = $_COOKIE["user"]; 
        $_SESSION["type"] = $_COOKIE["type"]; 
        
        if ( $_COOKIE["type"] == 1)
        {
            header('Location: Student_index.php');
        }
        else if ( $_COOKIE["type"] == 2)
        {
            header('Location: teacher.php');
        }
         else if ( $_COOKIE["type"] == 4)
        {
            header('Location: Principal_index.php');
        }
        else 
        {
            header('Location: logout.php');  
        }
    }       
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title>Login | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <style>
            body {
            background-image: url("images/sh.jpg");
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
    </head>    
    <body class="font" >

        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
          <a href="index.php" class="nav-page" >Home</a>       
        </div>        
        <div class="container">
            <br><br>
            <div class="row">                
                <div class="col-4 center">                    
                    <div class="card">                        
                        <center><h1>Log In</h1></center> 
                        <form action="login.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <input type="text" name="user" placeholder="Username" required>
                                        <input type="password" name="pass" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" style="padding-top:0.8rem;"> 
                                <center>
                                    <input type="checkbox" value="1" name="log_check" class="checkbox" >Keep me logged in
                                    <div class="row" style="margin-top:0.8rem; margin-bottom:0.8rem;">
                                        <button name="btn_submit" type="submit" class="btn btn-green btn-large btn-wide">Log In</button>
                                    </div>
                                    <div class="alert-fail" hidden>
                                        <span class="close-btn-fail" id="user_alert" onclick="alert_login_close()">&times;</span>
                                        Username and/or password is incorrect
                                    </div>
                                    
                                   
                                   
                                </center>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            
            function alert_login_close(){
                user_alert.parentElement.style.display='none';
            }

            
        </script>
        <?php include("footer.php"); ?>
        
        <?php
        
        if(isset($_POST["btn_submit"])){
        $user = $_POST["user"];
        $pw = md5($_POST["pass"]);
                
        include("connection.php");
        $result = mysqli_query($con, "SELECT * FROM user_login WHERE username='$user' AND pw='$pw'");
        
        if (mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_row($result);
            $_SESSION["user"] = $user;
            $_SESSION["type"] = $row[2];
            
            if ($row[2] == 1)
            {   
                if(isset($_POST["log_check"]))
                {
                    setcookie("user", $user, time() + (86400 * 30), "/");
                    setcookie("type", $row[2], time() + (86400 * 30), "/");
                }
                                    
                //header('Location: login.php');
                echo "<script> window.location.href = window.location.href; </script>";
            } 
            else if ($row[2] == 2)
            {
                if(isset($_POST["log_check"]))
                {
                    setcookie("user", $user, time() + (86400 * 30), "/");
                    setcookie("type", $row[2], time() + (86400 * 30), "/");
                }
                                                        
                //header('Location: login.php');
                echo "<script> window.location.href = window.location.href; </script>";
            }
             else if ($row[2] == 4)
            {
                if(isset($_POST["log_check"]))
                {
                    setcookie("user", $user, time() + (86400 * 30), "/");
                    setcookie("type", $row[2], time() + (86400 * 30), "/");
                }
                                                        
                //header('Location: login.php');
                echo "<script> window.location.href = window.location.href; </script>";
            }
            else if ($row[2] == 3)
            {    
                //header('Location: login.php');
                echo "<script> window.location.href = window.location.href; </script>";
            }    
        }
        else 
        {
            echo "<script> user_alert.parentElement.style.display='block'; </script>";
        }
        
    }
    ?>
    </body>
</html>

