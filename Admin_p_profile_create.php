<?php
    session_start();
    
    if($_SESSION["type"] != 3)
    {
        header('location: logout.php');
    }

?>


        <?php

            if(isset($_POST["btn_submit"]))
            {  
                 include("connection.php");

                $user = $_SESSION["user"];
                $username=$_POST["username"];
                $names = $_POST["names"];
                $gender = $_POST["gender"];
                $telephone= $_POST["telephone"];
                $address = $_POST["address"];
                $class =$_POST["class"];
                $age = $_POST["age"];
                $email=$_POST["email"];
              
                include("connection.php");
                
                
                   
            $sql = "INSERT INTO `principals_info`(`username`, `names`,'email', `address`, `class`, `telephone`, `gender`, `age`) VALUES ('$username','$names','$email','$address','$class','$telephone','$gender','$age')";

           if ($con->query($sql) === TRUE) {
                 echo "New record created successfully";
                 
                } else {
                  echo "Error " . $sql . "<br>" . $con->error;
                }      
                   
                
                   
                   
                

            }


        ?>
<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Teachers Profile | Lumbini College</title>
        <link rel="icon" href="images/logo1.png" type="image/png">
        <style>
            body {
            background-image: url("images/shh.jpg");
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
        
    </head>  
    
    <body class="font">  
        
           
        <div class="nav-fixed">
          <a href="home.php"> <img src="images/log1o.png"></a>
          <a href="Admin_principal_profile.php" class="nav-page"> Previous </a> 
            
        </div> 
        <br>
        <br>
        <br>
        <br>

        
       
      
            
      <center>
           <form action="Admin_p_profile_create.php" method="POST">

               
                <div class="col-6 center">

                </div>

                <div class="col-6">                  
                    <div class="card-profile">
                        <div class="row">
                            <div class="col-12 card-heading-blue">
                                <center><br><h1>Student Profile</h1> <br></center>
                            </div>
                        </div>
                       
                        <hr>
                         <div class="row">                                
                            <div class="col-3 lbl">Username</div>
                            <div class="col-9">
                            
                                <input type="text" id="username" name="username" placeholder="username" >
                            </div>
                        </div>

                        <br>

    
                        <div class="row">                                
                            <div class="col-3 lbl">Name</div>
                            <div class="col-9">
                            
                                <input type="text" id="names" name="names" placeholder="Name" >
                            </div>
                        </div>

                        <br>

                        <div class="row">                                
                            <div class="col-3 lbl">Email</div>
                            <div class="col-9">
                            
                                <input type="text" id="email" name="email" placeholder="Email" >
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Address</div>
                            <div class="col-9">
                                <input type="text" id="address" name="address" placeholder="Address"  >
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Section</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="class" placeholder="eg:primary/secondary" >
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Telephone</div>
                            <div class="col-9">
                                   <input type="text" id="telephone" name="telephone" placeholder="eg - +94712345678" >
                            </div>
                        </div>

                        <br>


                        
                        <div class="row">
                            <div class="col-3 lbl">Gender</div>
                            <div class="col-9">
                               <input type="text" id="gender" name="gender" placeholder="Gender" >
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Age</div>
                            <div class="col-9">
                                   <input type="text" id="age" name="age" placeholder="Age" >
                            </div>
                        </div>

                        <br>

                        


            

                        <button name="btn_submit" id="btn_submit" type="submit" class="btn btn-green btn-large " >Submit</button>              

                        



            </form>
      </center>

     <?php include("footer.php"); ?>
    </body>
</html>

