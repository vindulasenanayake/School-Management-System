<?php
    session_start();
    
    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1 )
    {
        header('Location: login.php');
    }
    
    $user = $_SESSION["user"];

    include("connection.php");
    $result1 = mysqli_query($con, "SELECT fname FROM cust_name WHERE username='$user'");
    $result2 = mysqli_query($con, "SELECT pro_pic FROM student_info WHERE username='$user'");
   
    $row1 = mysqli_fetch_row($result1);
    $row2 = mysqli_fetch_row($result2);

    $_SESSION["real_name"] = $real_name = $row1[0]; 
    $_SESSION["pic_path"] = $pic_path = $row2[0]; 
    
        
    if(!isset($_GET["page"]))
    {
        $current_page = 1;
    }
    else
    {
        $current_page = $_GET["page"];
    }

    $end = $current_page * 8;
    $start = ($end) - 8;

    if(isset($_POST["function"]) && $_POST["function"] != "0" )
    {

        $function = $val = $_POST["function"];

        $result1 = mysqli_query($con, "SELECT * FROM client_job_vc WHERE function='$function' ORDER BY id DESC LIMIT $start, $end");

        $result2 = mysqli_query($con, "SELECT * FROM client_job_vc WHERE function='$function' ORDER BY id DESC");
    }
    else
    {
        $function = "Business Function";
        $val = "0";
        
        $result1 = mysqli_query($con, "SELECT * FROM client_job_vc ORDER BY id DESC LIMIT $start, $end");

        $result2 = mysqli_query($con, "SELECT * FROM client_job_vc ORDER BY id DESC"); 

    }

    $num1 = mysqli_num_rows($result2);

    $pages = floor($num1/8) + 1;
    $max_page = $pages;
    $min_page = 1;
   
    if ($current_page == $max_page)
    {
        $next_page = $current_page  ;
        $back_page = $current_page - 1;
    }
    else if ($current_page == $min_page)
    {
        $next_page = $current_page + 1;
        $back_page = $current_page;
    }
    else if ($current_page > $min_page && $current_page < $max_page)
    {
        $next_page = $current_page + 1;
        $back_page = $current_page - 1;
    }
    else
    {
        //echo "<script> window.location.href = 'client_home.php'; </script>";
        header("location: home.php");
    }

   
?>

<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>Hired!</title>
        <link rel="icon" href="images/favicon.png" type="image/png">
        
    </head>  
    
    <body class="font">  
        
        
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
            

            <a href="logout.php" class="nav-page"> Logout </a>       
            <a href="qualification.php" class="nav-page "> My Qualifications </a> 
            <a href="profile.php" class="nav-page "> My Profile </a>       
            <a href="home.php" class="nav-page current"> Home </a> 
            <a class="nav-name">Welcome <?php echo $_SESSION["real_name"] ?>!</a>
            <img class="nav-pro-pic" src="<?php echo $_SESSION['pic_path'];?>?<?php echo rand(1,3000); ?>">
        
        
        </div> 
            
            
        
        <div class="container">
            <div class="row">
                <div class="col-3 left-sidebar">
                    
                    <!-- <div class="card-name">
                        
                        <img src="<?php echo $_SESSION['pic_path']?>?<?php echo rand(1,3000); ?>" width="100%">
                       
                    </div> -->
                    
                    <div class="card-name">
                        <form method="post" action="home.php">
                            <div class="row">
                                <div class="col-12 center">
                                    <br>
                                     <strong>Filter Results</strong>
                                    
                                    <select name="function" id="function" onchange="submit()">                                        
                                        <option value=<?php echo $val; ?> disabled selected hidden><?php echo $function; ?></option>
                                        <option value="0">-- None --</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Customer Support">Customer Support</option>
                                        <option value="IT">IT</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Production">Production</option>
                                        <option value="R&D">Reasearch and Development</option>
                                        <option value="Sales and Distribution">Sales and Distribution</option>
                                    </select>
                                </div>                                 
                            </div>
                            <br>
                               
                        </form> 
                    </div>
                    <div class="card-name"> 
                        <br>
                        <div class="row center">                            
                            <div class="col-4">
                                <a href="home.php?page=<?php echo $back_page; ?>" class="btn btn-black btn-wide">&larr; <?php echo $back_page; ?></a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-disabled btn-wide "><?php echo $current_page; ?></a>
                            </div>
                            <div class="col-4   ">
                                <a href="home.php?page=<?php echo $next_page; ?>" class="btn btn-black btn-wide"><?php echo $next_page; ?> &rarr; </a>          
                            </div>
                        </div>                                    
                                        
                        <br>  
                         
                       
                       
                    </div>
                   
                   
                </div>

                <div class="col-3">

                </div>

                <div class="col-9">
                    <div class="row">
                        
                        <div class="col-6">
                        <?php
                            $count = 1;
                            while ($row1 = mysqli_fetch_row($result1))
                            {

                            echo " 
                            <div class='card-container'>
                                <a href='job_details.php?id=$row1[0]'>
                                    <div class='card-job card-top'>
                                        <div class='row'>
                                            <div class='card-job-img'>
                                                <img src='$row1[6]' width='100%'>
                                            </div>
                                            <div class='col-8'>
                                            <br>
                                                <div class='row big'>
                                                    $row1[2]                                    
                                                </div>
                                                <div class='row'>
                                                    $row1[3]                                    
                                                </div><hr>
                                                <div class='row content justify small'>
                                                    ".addslashes($row1[4])."                                    
                                                </div>
                                                <br> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class='overlay'>
                                        <div class='overlay-text'><button class='btn btn-blue btn-large' >View </button> </div>
                                    </div>
                                     <div class='overlay2'></div>
                                </a> 
                            </div>
                            <br>
                            ";
                        
                            if ($count == 4 )
                            {
                                echo "</div><br>";
                                echo "<div class='col-6'>";
                                $count = 1;
                            }
                            else
                            {                                
                                $count = $count +1;
                            }

                        }
                        ?>
                        </div>
                    
                </div>                
            </div>     
        </div>       
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>

