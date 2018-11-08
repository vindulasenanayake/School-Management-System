<?php
    session_start();
    
    if(isset($_POST["btn_save"]))
    {
        $user = $_SESSION["user"];
        $names = $_POST["names"];
        $gender = $_POST["gender"];
        $telephone= $_POST["telephone"];
        
        $address = $_POST["address"];
       
        $age = $_POST["age"];
        
        include("connection.php");
        
        $result3 = mysqli_query($con,"UPDATE student_info SET names='$names', gender='$gender',age='$age',class='$class',telephone='$telephone',address='$address', WHERE username='$user'");
        
       
        
        header('Location: profile.php');
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1)
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1);

       
    }   
?>

<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Student Profile | Lumbini College</title>
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
    
    <body class="font">  
        
           <?php              
                        

                        if(!isset($_SESSION["user"]) || $_SESSION["type"] != 1)
                        {
                            header('Location: login.php');
                        }
                        else
                        {
                            $user = $_SESSION["user"];

                            include("connection.php");

                            $result1 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$user'");
                            $row1 = mysqli_fetch_row($result1);

                            
                        }   


                    ?>
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/logo.png"></a>
            

            <a href="logout.php" class="nav-page"> Logout </a>       
            <a href="qualification.php" class="nav-page "> Extra Curricular Activities </a>      
            <a href="home.php" class="nav-page"> Home </a> 
            <a class="nav-name">Student - <?php echo $_SESSION["real_name"] ?>!</a>
            <img class="nav-pro-pic" src="<?php echo $_SESSION['pic_path'];?>?<?php echo rand(1,3000); ?>">
        
        </div> 
        <br>
        <br>
        <br>
        <br>

        
       
        
            
      

                 
                <form action="profile.php" method="POST">

                </div>

                <div class="col-6 center">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>My Details</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                        <div class="row">                                
                            <div class="col-3 lbl">Name</div>
                            <div class="col-9">
                            
                                <input type="text" id="names" name="names" placeholder="Name" value="<?php echo $row1[1]; ?>" >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Gender</div>
                            <div class="col-9">
                               
                                         <input type="text" id="gender" name="gender" placeholder="Gender" value="<?php echo $row1[5]; ?>" >
                                
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Age</div>
                            <div class="col-9">
                                   <input type="text" id="age" name="age" placeholder="Age" value="<?php echo $row1[6];?>" >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Class</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="class" placeholder="eg - 7A" value="<?php echo $row1[3];?>" >
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Telephone</div>
                            <div class="col-9">
                                   <input type="text" id="telephone" name="telephone" placeholder="eg - +94712345678" value="<?php echo $row1[4]; ?>" >
                            </div>
                        </div>

                        <br>

                        

                        

                        <div class="row">
                            <div class="col-3 lbl">Address</div>
                            <div class="col-9">
                                <textarea type="text" id="address" name="address" placeholder="Address" ><?php echo $row1[2]; ?></textarea>
                            </div>
                        </div>

                        <br>                          

                       


                <div class="col-3">

                </div>

                <div class="col-3 right-sidebar">

                  

                </div>
                </form>
            </div>
        </div>

        
        
        <script>
            
         
            
            
             
            
        </script>
        <?php include("footer.php"); ?>
    </body>
</html>

