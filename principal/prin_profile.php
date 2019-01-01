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
        
        include("../db_connection/connection.php");
        
        $result3 = mysqli_query($con,"UPDATE principals_info SET names='$names', gender='$gender',age='$age',class='$class',telephone='$telephone',address='$address', WHERE username='$user'");
        
       
        
        header('Location: profile.php');
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 4)
    {
        header('Location: ../admin/login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("../db_connection/connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM principals_info WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1);

       
    }   
?>

<html>
    <head>
        <link href="../css/style1.css" rel="stylesheet" type="text/css">
        <title> Principal Profile | Lumbini College</title>
        <link rel="icon" href="../images/logo1.png" type="image/png">
        <style>
            body {
            background-image: url("../images/sh.jpg");
            background-attachment: fixed;
            background-position:0;
            background-repeat: no-repeat;
            background-size: cover;
          }
        </style>
    </head>  
    
    <body class="font">  
        
           <?php              
                        

                        if(!isset($_SESSION["user"]) || $_SESSION["type"] != 4)
                        {
                            header('Location:../admin/ login.php');
                        }
                        else
                        {
                            $user = $_SESSION["user"];

                            include("../db_connection/connection.php");

                            $result1 = mysqli_query($con, "SELECT * FROM principals_info WHERE username='$user'");
                            $row1 = mysqli_fetch_row($result1);

                            
                        }   


                    ?>
        <div class="nav-fixed">
          <a href="home.php"> <img src="../images/logo.png"></a>
            

            <a href="../admin/logout.php" class="nav-page"> Logout </a>       
                
            <a href="principal.php" class="nav-page"> Previous </a> 
          
            
        </div> 
        <br>
        <br>
        <br>
        <br>
        
       
        
            
      

                 
                <form action="profile.php" method="POST">

                </div>

                <div class="col-12 center">

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
                                <select name="gender" id="gender" >
                                    <option value="<?php echo $row1[6]; ?>" hidden><?php echo $row1[6]; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>                                       
                                </select>
                            </div>
                        </div>

                        <br>

                        
                        <div class="row">
                            <div class="col-3 lbl">Age</div>
                            <div class="col-9">
                                   <input type="text" id="age" name="age" placeholder="Age" value="<?php echo $row1[7];?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-3 lbl">Class</div>
                            <div class="col-9">
                                   <input type="text" id="class" name="class" placeholder="eg - 7A" value="<?php echo $row1[4];?>" >
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col-3 lbl">Telephone</div>
                            <div class="col-9">
                                   <input type="text" id="telephone" name="telephone" placeholder="eg - +94712345678" value="<?php echo $row1[5]; ?>" >
                            </div>
                        </div>

                        <br>

                        
                        

                        

                        <div class="row">
                            <div class="col-3 lbl">Address</div>
                            <div class="col-9">
                                <textarea type="text" id="address" name="address" placeholder="Address" disabled><?php echo $row1[3]; ?></textarea>
                            </div>
                        </div>

                        <br>                          

                       


                <div class="col-3">

                </div>

                <div class="col-3 right-sidebar">

                    <button name="btn_edit" id="btn_edit" type="button" class="btn btn-blue btn-large btn-wide" onclick="edit()">View details</button>    
                       

                </div>
                </form>
            </div>
        </div>

        
        
        <script>
            
            function edit(){
               
                document.getElementById("names").disabled = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("class").disabled = false;
               
                document.getElementById("telephone").disabled = false;
                document.getElementById("age").disabled = false;
                document.getElementById("address").disabled = false;
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
                
            }
            
             function cancel(){
               
                document.getElementById("names").disabled = true;
                document.getElementById("class").disabled = true;
                document.getElementById("gender").disabled = true;
               
                document.getElementById("telephone").disabled = true;
                document.getElementById("age").disabled = true;
                document.getElementById("address").disabled = true;
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_edit").disabled = false;
                document.getElementById("btn_cancel").disabled = true;

            }
            
            
             
            
        </script>
          <?php include("../admin/footer.php"); ?>
    </body>
</html>

